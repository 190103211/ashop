<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    //This index function return all posts in my database
    public function index(Request $request)
    {
        $posts = Post::all();

        return response($posts,200);
    }

    // This getPost function return post which id is equal to the postID
    public function getPost(Request $request)
    {
        $post = Post::find($request->postID);

        if($post == null)
        {
            return response(['message'=>'This post is not found'],404);
        }
        return response($post,200);
    }
}
