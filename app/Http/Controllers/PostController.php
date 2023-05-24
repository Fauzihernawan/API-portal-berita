<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostsResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // return respone()->json($posts);
        return PostsResource::collection($posts);
    }
}
