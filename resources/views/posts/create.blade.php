@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    <div class="row">
        <div class="col-10">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                @include('posts.partials.form')
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
