<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class indexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(20);
        return view('post.index', compact('posts'));
//
//        $query = Post::query();
//
//        if (isset($data['category_id'])) {
//            $query->where('category_id', $data['category_id']);
//        }
//
//        if (isset($data['title'])) {
//            $query->where('title', 'like', "%{$data['title']}%");
//        }
//        if (isset($data['content'])) {
//            $query->where('content', 'like', "%{$data['content']}%");
//        }
//        $posts = $query->get();
//        foreach ($posts as $post) {
//
//            dump('Title post -> ' . $post->id . ' ' . $post->title);
//        }
//        dd('End Posts');
//        $posts = Post::where('is_published', 1)
//            ->where('category_id', $data['category_id'])
//            ->get();
//        $posts = Post::paginate(20);
//        return view('post.index', compact('posts'));
    }
}
