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

    public function store(Request $request) {
        $data = $this->validate(request(), [
            "caption" => "required",
            "image" => ["required", "image"]
        ]);
        $image = $request->file('image');
        $image->move('uploads', $image->getClientOriginalName());
        auth()->user()->posts()->create(request()->all());
    }

}
