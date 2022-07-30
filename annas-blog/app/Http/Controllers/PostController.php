<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => (request('category'))? "Category" : ((request('author'))? "Category" : "Blog"),
            "posts" => Post::with(['user' , 'category'])->latest()->SearchAllPosts(request(['search' , 'category', 'author']))->paginate(9)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
