<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Show the welcome page.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('pages.welcome');
    }
}
