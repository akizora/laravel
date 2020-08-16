<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testApiController extends Controller
{
    //
    static function index() {
        $posts = Post::orderby('_id', 'desc')->get();
        return view('index', ['post' => $posts]);
    }
}
