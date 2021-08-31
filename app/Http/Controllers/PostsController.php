<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
 {

    public function __construct() {
        $this->middleware('auth');
    }

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
        $savedImage = $image->move('uploads', $image->getClientOriginalName());
        auth()->user()->posts()->create([
            'caption' => $request->input('caption'),
            'image' => $savedImage->getPathname()
        ]);

        return redirect('profile/' . auth()->user()->id);
    }

}
