<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return View ('posts', [
            'title'=> 'posts',
            'postingan' => Post::all()
        ]);
    }

    public function show($slug){
        return View('post', [
            "title" => "single post",
            "post" => Post::find($slug)
        ] );
    }
}
