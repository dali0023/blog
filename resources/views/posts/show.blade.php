@extends('layouts.app')

@section('title', "Blog Posts")

@section('content')
    <p>{{ $posts->title }}</p>
    <p>{{ $posts->content }}</p>
@endsection

