<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AllDeleteController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::onlyTrashed()->get();
        return view('post.allDelete', compact('posts'));
    }
}
