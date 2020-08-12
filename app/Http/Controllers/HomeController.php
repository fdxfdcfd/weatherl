<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(10);
        return view('home')->withPosts($posts);
    }
}
