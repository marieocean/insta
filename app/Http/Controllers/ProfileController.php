<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;

class ProfileController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($user = "empty") {
        $user = User::find($user);
        return view('home', [
            "user" => $user
                ]
        );
    }

}
