<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::where('is_published', '1')->get();
//        foreach ($posts as $post) {
//            dump($post->title);
//
//        }

        $categoryes = Category::find(1);
        $posts = Post::find(3);
        dd($posts->tags);
        dd($categoryes->posts);

//        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
    protected function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function restore()
    {
        $post = Post::withTrashed()->find(6);
        $post->restore();
        dd('end');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some 2title',
            'content' => 'some 2content',
            'image' => 'someImg.jpg',
            'likes' => '2000',
            'is_published' => '1',
        ];
        Post::firstOrCreate(
            [
                'title' => 'some 2title',
            ],
            $anotherPost);
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => '2title',
            'content' => '2content',
            'image' => 'Img.jpg',
            'likes' => '200',
            'is_published' => '1',
        ];
        Post::
        updateOrCreate(['title' => '2title',],
            $anotherPost);
    }
}
