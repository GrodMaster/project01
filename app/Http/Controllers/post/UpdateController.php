<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke( UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->srevice->update($post ,$data);
        return redirect()->route('post.show', $post->id);
    }
}
