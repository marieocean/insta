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
        $user = User::findOrFail($user);

        return view('profiles.index', [
            "user" => $user
                ]
        );
    }

}
