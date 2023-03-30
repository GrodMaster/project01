@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                   value="{{old('title')}}">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Title</label>
            <textarea class="form-control" id="content" placeholder="Content"
                      name="content">{{old('content')}}</textarea>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image.jpg</label>
            <input type="text" class="form-control" value="{{old('image')}}" id="image" name="image">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select class="form-select" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id')==$category->id? 'selected':'' }}
                        value="{{$category->id}}">{{$category->title}}</option>

                @endforeach
            </select>
        </div>

        @foreach($tags as $tag)

            <div class="form-check mt-3 mb-3">
                <input class="form-check-input" type="checkbox"
                       value="{{$tag->id}}" id="tags{{$tag->id}}"
                       name="tags[]">
                <label class="form-check-label" for="tags{{$tag->id}}">
                    {{$tag->title}}
                </label>
            </div>
        @endforeach

        <button class="btn btn-primary" type="submit">Send</button>
    </form>
@endsection
