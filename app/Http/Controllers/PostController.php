<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
//        $category= Category::find(1);
//        $tag = Tag::find(1);
//        dd($post->tags);
//        foreach ($posts as $post) {
//            dump($post->title);
//
//        }

//        $categoryes = Category::find(1);
//        $posts = Post::find(3);
//        dd($posts->tags);
//        dd($categoryes->posts);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags'=> '',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);

        $post->tags()->attach($tags);
//        foreach ($tags as $tag){
//        PostTag::firstOrCreate([
//            'tag_id'=> $tag,
//            'post_id'=> $post->id,
//        ]);
//        }
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    protected function edit(Post $post)
    {
        $tags = Tag::all();

        $categories = Category::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags'=>'',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
//        $post = $post->fresh();
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function restore()
    {
        $posts = Post::withTrashed()->get();
//        dd($posts);
        foreach ($posts as $post) {
            $post->restore();
        }
        dd('end');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some 2title',
            'content' => 'some 2content',
            'image' => 'someImg.jpg',
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
        ];
        Post::updateOrCreate(['title' => '2title',],
            $anotherPost);
    }

    public function allDelete()
    {
        $posts = Post::onlyTrashed()->get();

        return view('post.allDelete', compact('posts'));
    }
}
