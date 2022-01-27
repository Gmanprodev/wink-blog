<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function contact() {
        return view('blog.contact');
    }

    public function subscribe(ContactRequest $request) {
        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email
        ]);
        return back();

    }


}