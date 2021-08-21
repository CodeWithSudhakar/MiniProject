<?php

namespace App\Http\Controllers;
//
use App\Models\Post;

use Illuminate\Http\Request;


class dashboard extends Controller
{
    //
    public function show_post()
    {
        $posts = Post::all();
        return view('dashboard', ['posts' => $posts]);
    }
}
