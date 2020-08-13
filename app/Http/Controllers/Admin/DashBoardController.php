<?php

namespace App\Http\Controllers\Admin;

use App\Posts;
use Illuminate\Http\Request;

class DashBoardController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(10);
        return view('admin/dashboard')->withPosts($posts);
    }
}
