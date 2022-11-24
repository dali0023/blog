@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    <div class="row">
        <div class="col-10">
            <form action="{{ route('posts.update', ['post'=>$post->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @include('posts.partials.form')
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
