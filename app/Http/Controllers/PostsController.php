<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    //
    public function create() {
        return view('posts.create');
    }

    public function store() {
        $data = $this->validate(request(), [
            "caption" => "required",
            "image" => ["required", "image"]
        ]);

        auth()->user()->posts()->create(request()->all());
    }

}
