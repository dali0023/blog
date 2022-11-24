@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    @foreach ($posts as $post)
        {{-- <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p> --}}
        @include('posts.partials.post')
    @endforeach

@endsection
