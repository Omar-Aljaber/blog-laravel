<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentsCotroller extends Controller
{
    public function store(Post $post)
    {
        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $post->id,
        ]);
        return back();
    }
}
