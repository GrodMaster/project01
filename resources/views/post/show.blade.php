@extends('layouts.main')
@section('content')
    <div class="m-3">
<div>{{$post->id}}. {{$post->title}}</div>
<div>{{$post->content}}</div>
    </div>
    <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary m-3">Update</a>
    <form action="{{route('post.destroy', $post->id)}}" method="post">
        @csrf
        @method('delete')
    <input type="submit" class="btn btn-primary" value="Delete"/>
    </form>
    <a href="{{route('post.index')}}" class="btn btn-primary m-3">Back</a>

@endsection
