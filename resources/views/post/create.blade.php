@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Title</label>
        <textarea class="form-control" id="content" placeholder="Content" name="content"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image.jpg</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>
    <button class="btn btn-primary" type="submit">Send</button>
    </form>
@endsection
