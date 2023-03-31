<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/build/assets/app-67dcdfd2.css') }}">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <nav>
            <ul class="nav justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.index')}}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.index')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                </li>
            </ul>
{{--            <ul>--}}
{{--                <li><a href="{{route('main.index')}}">Main</a></li>--}}
{{--                <li><a href="{{route('post.index')}}">Post</a></li>--}}
{{--                <li><a href="{{route('about.index')}}">About</a></li>--}}
{{--                <li><a href="{{route('contact.index')}}">Contact</a></li>--}}
{{--            </ul>--}}
        </nav>
    </div>
    <div class="container">@yield('content')</div>
</body>
</html>
