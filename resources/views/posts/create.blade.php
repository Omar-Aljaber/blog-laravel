<x-layout>
    <div class="container mt-5 pt-5 mb-5 pb-5">
        <form action="/laravel/blog/public/posts/create" method="POST">
            @method('POST')
            <x-form />
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
</x-layout>