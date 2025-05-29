@section('title', $post->title)
<!-- Main Content -->
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-4 order-md-2 mb-4">
            <div class="sidebar">
                <!-- About Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>
                        <p class="card-text">Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Newer</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Older</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Subscribe Button -->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <button class="btn btn-primary btn-subscribe btn-lg btn-block">Subscribe</button>
                    </div>
                </div>
                
                <!-- Archives -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Archives</h5>
                        <ul class="archive-list">
                            <li><a href="#">March 2014</a></li>
                            <li><a href="#">February 2014</a></li>
                            <li><a href="#">January 2014</a></li>
                            <li><a href="#">December 2013</a></li>
                            <li><a href="#">November 2013</a></li>
                            <li><a href="#">October 2013</a></li>
                            <li><a href="#">September 2013</a></li>
                            <li><a href="#">August 2013</a></li>
                            <li><a href="#">July 2013</a></li>
                            <li><a href="#">June 2013</a></li>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">April 2013</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Elsewhere -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Elsewhere</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="col-md-8 order-md-1">
            <!-- Blog Post 1 -->
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-meta">
                    Posted by <a href="#">{{ $post->author }}</a> | 
                    {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} 
                </p>
                <hr>                    
                <div id="post1-content">
                    <p>{{ $post->body }}</p>
                    <a href="/laravel/blog/public/posts/{{$post->id}}/edit">Edit Blog</a>   
                    <p><hr>  
                    <h1>Comments</h1>
                    @foreach($post->comments as $comment)
                        <h4>{{ $comment->name }}</h4>
                        <p>{{ $comment->body }}</p>
                    @endforeach
                </div> 
                <br />
                <x-createComment :post="$post" />
            </div>
        </div>
    </div>
</div>
