@extends('layouts.main')
@section('content')
    <div ><a href="{{route('post.create')}}" class="btn btn-primary m-3">Add</a></div>
    <div>
        @foreach($posts as $post)
            <div class="m-3"><a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
        @endforeach
    </div>
@endsection
