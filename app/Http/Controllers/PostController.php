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
        $tag = $_GET["tag"] ??false;
        $posts = WinkPost::with('author');
        if($tag) {
            $posts->whereHas('tags', function($query) use ($tag) {
                $query->where('slug', $tag);
            });
        }
        $posts=$posts->orderBy('created_at', 'desc')->get();
        return view('blog.blog')->with('posts', $posts);
    }

}
