<?php
 
namespace App\Services;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostService
{
    public function displayAll()
    {
        return Post::all();
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());
    }

    public function show(Post $post)
    {
        return Post::find($post);
    }

    public function delete(Post $post)
    {
        //$p = Post::find($post);
        $post->delete();
    }
}