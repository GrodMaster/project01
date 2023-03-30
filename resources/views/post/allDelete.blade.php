@extends('layouts.main')
@section('content')
<h3>Удаленные записи</h3>
<hr>
    <div>
        @foreach($posts as $post)
            <div>
                <h4> Запись: {{$post->title}}</h4>
                <p>{{$post->title}} </p>
                <p>{{$post->content}}</p>
                <p>likes: {{$post->likes}}</p>
            </div>
        @endforeach
    </div>
@endsection
