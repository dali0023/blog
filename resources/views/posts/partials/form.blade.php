<div class="mb-3">
    <label for="text" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
        value="{{ old('title', optional($post ?? null)->title) }}">
    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5">
        {{ old('content', optional($post ?? null)->content) }}
    </textarea>
    @error('content')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
