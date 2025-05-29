@csrf
<div class="form-group mt-3">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$post->title ?? ''}}">
    @error('title')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="body">Content</label>
    <textarea class="form-control" id="body" name="body" cols="30" rows="10">{{$post->body ?? ""}}</textarea>
    @error('body')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" class="form-control" value="{{$post->author ?? ''}}">
    @error('author')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
