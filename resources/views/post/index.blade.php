@extends('layouts.main')
@section('content')
    <div><a href="{{route('post.create')}}" class="btn btn-primary m-3">Add</a></div>
    <div>
        @foreach($posts as $post)
            <div class="m-3"><a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
{{--            <div class="m-3"><img src="{{$post->image}}" width="200px"></div>--}}
{{--            <div class="m-3">{{$post->content}}</div>--}}
        @endforeach
        <div class="mt-5">
            {{$posts->withQueryString()->links()}}
        </div>
    </div>
@endsection
