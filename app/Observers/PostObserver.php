<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{

    public function created(Post $post)
    {
        if(! \App::runningInConsole()){
            $post->user_id = auth()->user()->id;
        }
    }

    public function deleting(Post $post)
    {
        if($post->image){
            Storage::delete($post->image->url);
        }
    }

}
