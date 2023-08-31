<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller {
    function index() {
        return PostResource::collection(Post::wherePublished(true)->get());
    }
}
