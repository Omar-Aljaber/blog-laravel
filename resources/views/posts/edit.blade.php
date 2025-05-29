<x-layout>
    <div class="container mt-5 pt-5 mb-5 pb-5">
        <form action="/laravel/blog/public/posts/{{$post->id}}" method="POST">
            @method('PATCH')
            <x-form :post="$post" />
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</x-layout>