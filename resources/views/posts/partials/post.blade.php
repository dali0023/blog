<p></p>
<p></p>
<div class="card">
    <h5 class="card-header">{{ $post->title }}</h5>
    <div class="card-body">
        <p class="card-text">{{ $post->content }}</p>
        <div style="display: flex;">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"
                style="margin-right:10px">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
