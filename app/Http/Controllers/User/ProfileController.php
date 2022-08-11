<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        return view('user.profile.index');
    }
}
