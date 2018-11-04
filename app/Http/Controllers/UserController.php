<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = new User;
        $user->_search = $request->_search;

        $users = User::when($request, function ($query) use ($request) {
            $query->where('name', 'like', "%{$request->_search}%")
                ->orWhere('username', 'like', "%{$request->_search}%")
                ->orWhere('email', 'like', "%{$request->_search}%")
                ->orderBy('name', 'asc');
        })->latest()->paginate(5);

        $users->appends($request->only('_token', '_search'));

        return view('users.index', compact('user', 'users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;

        return view('users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()
           ->attach(Role::where('name', 'User')->first());

        return redirect()->route('users.show', $user->id)
            ->with('success', __('messages.success-stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  object  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  object  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user_password = $user->password;
        $user->fill($request->all());
        $user->password = $request->password ? Hash::make($request->password) : $user_password;
        $user->save();

        return redirect()->route('users.show', $user->id)
            ->with('success', __('messages.success-updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user_admin = Role::where('name', 'Admin')->first()->users();

        if ($user->hasRole('Admin') && $user_admin->count() == 1) {
            return redirect()->route('users.index')
                ->with('failed', __('messages.failed-deleted'));
        } else {
            $user->delete();

            return redirect()->route('users.index')
                ->with('success', __('messages.success-deleted'));
        }

    }
}
