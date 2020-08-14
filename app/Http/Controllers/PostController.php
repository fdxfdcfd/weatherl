<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Posts;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    public function index()
    {
        //fetch 5 posts from database which are active and latest
        $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(5);
        //page heading
        //return home.blade.php template from resources/views folder
        return view('postList')->withPosts($posts);
    }



    public function show($slug)
    {
        $post = Posts::where('slug',$slug)->first();
        if(!$post)
        {
            return redirect('/')->withErrors('requested page not found');
        }
        $comments = $post->comments;
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    public function upload(Request $request)
    {
        $file=$request->file('file');
        $path= url('/uploads/').'/' . $file->getClientOriginalName();
        $imgpath = $file->move(public_path('/images/'),$file->getClientOriginalName());
        $fileNameToStore= $path;


        return json_encode(['location' => $fileNameToStore]);
    }
}
