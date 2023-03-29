
@extends('layouts.main')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Title</label>
            <textarea class="form-control" id="content" placeholder="Content" name="content">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image.jpg</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
