<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status',2)->latest('id')->paginate(8);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();

        return view('posts.show', [
            'post' => $post,
            'similares' => $similares
        ]);
    }

    public function category(Category $category)
    {
        
        $posts = Post::where('category_id', $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);

        return view('posts.category', [
            'posts' => $posts,
            'category' => $category
        ]);
    }

    public function tag(Tag $tag)
    {
        
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);
        
        return view('posts.tag', [
            'posts' => $posts, 
            'tag' => $tag
        ]);
    }
}
