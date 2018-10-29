@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group btn-group-sm float-right" role="group" aria-label="Action Buttons">
                        <a class="btn btn-secondary" href="{{ route('users.index') }}" title="@lang('buttons.back')">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </a>

                        <a class="btn btn-secondary" href="{{ route('users.create') }}" title="@lang('buttons.create')">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>

                        <a class="btn btn-secondary" href="{{ route('users.show', $user->id) }}" title="@lang('buttons.show')">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>

                        <form class="btn-group btn-group-sm" method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-secondary" title="@lang('buttons.delete')" onclick="return confirm(&quot;@lang('messages.confirm-delete')&quot;);">
                                <i class="fa fa-remove" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                    @lang('routes.' . Route::currentRouteName())
                </div>

                <div class="card-body">
                    @include('layouts._alert')

                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @include('users._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
