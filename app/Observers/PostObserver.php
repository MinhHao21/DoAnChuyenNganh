<?php

namespace App\Observers;

use App\Models\Fileupload;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        $file = Fileupload::where('idtruong', $post->file)->get();
        foreach ($file as $f) {
            $f->idtruong = $post->id;
            $f->save();
        }


        // $listdanhmuc_id = explode(',', $post->danhmuc_id);
        // foreach ($listdanhmuc_id as $dm) {
        //     DB::table('post_tag')->insert([
        //         'post_id' =>$post->id,
        //         'tag_id' => $dm,
        //     ]);
        // }
        // if (strpos($post->slug, '/') !== false) {
            $post->slug = str_replace('/', '-', $post->slug);
     
            $post->danhmuc_id = trim($post->danhmuc_id,'"');
            $post->save();
        // }
        //Danh muc

    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        $file = Fileupload::where('idtruong', $post->file)->get();
        foreach ($file as $f) {
            $f->idtruong = $post->id;
            $f->save();
        }
      
        DB::table('posts')
        ->where('id', $post->id)
        ->update(['danhmuc_id' => trim($post->danhmuc_id,'"')]);
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
