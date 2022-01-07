<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class PostController extends Controller
{
    public function index() {
        $posts = WinkPost::with('author')->orderBy('created_at', 'desc')->get();
        return view('blog.index')->with('posts', $posts);
    }

    public function show(WinkPost $post) {
        return view('blog.show')->with('post', $post);
    }

    public function blog() {
        $posts = WinkPost::with('author')->orderBy('created_at', 'desc')->get();
        return view('blog.blog')->with('posts', $posts);
    }

}
