@extends('main')

@section('container')
    <h1 class="mb-5">Post categories {{ $category }}</h1>

@foreach ($posts as $post)

<ul>
    <li>
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </li>
</ul>
        

@endforeach
@endsection