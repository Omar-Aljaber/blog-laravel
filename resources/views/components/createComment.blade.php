<form action="/laravel/blog/public/posts/{{ $post->id }}/comments" method="POST">
  @csrf
  <h4>Write your comment</h4>
  <div class="form-group mb-3">
    <label for="name">Name</label>
    <input name="name" class="form-control" id="name" required>
  </div>
  <div class="form-group mb-3">
    <label for="body">Comment</label>
    <textarea name="body" class="form-control w-100" id="body" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Save</button>
</form>