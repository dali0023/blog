<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\BlogPost;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{

    public function index()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->get();
        abort_if(!isset($posts), 404);
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(StorePost $request)
    {
        $validated = $request->validated();
        $post = BlogPost::create($validated);
        session()->flash('status', 'Post added successfully!');

        return Redirect::route('posts.show', ['post' => $post->id]);
    }

   
    public function show($id)
    {
        $posts = BlogPost::find($id);
        abort_if(!isset($posts), 404);
        return view('posts.show', compact('posts'));
    }


    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(StorePost $request, $id)
    {
        $post = BlogPost::findOrFail($id);
        $validated = $request->validated();
        $post->fill($validated);
        $post->save();

        session()->flash('status', 'Post Updated Successfully!');
        return Redirect::route('posts.show', ['post' => $post->id]);
    }


    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();
        session()->flash('status', 'Post Deleted Successfully!');
        return Redirect::route('posts.index');
    }
}
