<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Wink\WinkPost;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // protected $posts;

    // public function __construct() 
    // {
    //     // Fetch the Site Settings object
    //     $this->posts = WinkPost::with('author')->orderBy('created_at', 'desc')->get();
    //     View::share('posts', $this->posts);
    // }

}
