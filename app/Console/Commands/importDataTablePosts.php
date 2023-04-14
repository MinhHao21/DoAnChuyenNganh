<?php

namespace App\Console\Commands;

use App\Models\Post;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class importDataTablePosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conver:datapost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import data for post table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // DB::connection('mysql2')
        //     ->table('posts')
        //     ->orderBy('id')->chunk(50,  function ($rows) {
        //         foreach ($rows as $row) {
        //             $this->info($row->id);
        //             $posts = new Post();
        //             $p = Post::where('slug', $row->slug)->first();
        //             if($p){
        //                 $posts->id =  $row->id;
        //                 $posts->slug = $row->id . '-' . $row->slug;
        //                 $posts->title = $row->title;
        //                 $posts->danhmuc_id = $row->catid;
        //                 if(strlen($row->introtext) > strlen($row->fulltext)){
        //                     $posts->content = html_entity_decode( $row->introtext);
        //                     $posts->excerpt = html_entity_decode( $row->fulltext);
        //                     $posts->content = str_replace('src="images', 'src="/storage/images', $posts->content);
        //                     // $posts->content =  str_replace('&nbsp;', ' ', $posts->content);
        //                 }
        //                 else{
        //                     $posts->excerpt = html_entity_decode( $row->introtext);
        //                     $posts->content = html_entity_decode( $row->fulltext);
        //                     $posts->content = str_replace('src="images', 'src="/storage/images', $posts->content);
        //                     // $posts->content =  str_replace('&nbsp;', ' ', $posts->content);
        //                 }
        //                 $posts->created_by = $row->created_by_alias;
        //                 $posts->created_at = $row->created;
        //                 $posts->published_at = Carbon::now();
        //                 $posts->ordering = $row->ordering;
        //                 $thumbnail = 'Image'.$row->id;
        //                 $posts->thumbnail  = 'media/k2/items/cache/'.md5($thumbnail).'_M.jpg';
        //                 $posts->save();
        //             }


        //         }});

        //     DB::table('posts')
        //         ->orderBy('id', 'desc')->chunk(50,  function ($rows) {
        //             foreach ($rows as $row) {
        //                 $data ='';
        //                 $post = Post::find($row->id);
        //                 $this->info($row->id);
        //                 if(file_exists("storage/".$row->thumbnail) && $row->thumbnail){

        //                     $post->thumbnail = $row->thumbnail;
        //                     $data = str_replace('src=', '',   $post->thumbnail);
        //                     $post->thumbnail= $data ;
        //                     $post->save();
        //                  }else{
        //                      preg_match_all('/<img[^>]+>/i',  $row->content, $result);

        //                      if ($result) {
        //                          if ($result[0]) {
        //                              if ($result[0][0]) {
        //                                  preg_match_all('/(src)=("[^"]*")/i', $result[0][0], $img);
        //                                  if ($img) {
        //                                      try {
        //                                          if (preg_match('/src=/', $img[0][0]) == 1) {
        //                                              $data = str_replace('src="/storage/', '', $img[0][0]);
        //                                              $data = str_replace('src=', '', $img[0][0]);

        //                                              $data = str_replace('"', '', $data);
        //                                              // return $data;
        //                                              $post->thumbnail = $data;
        //                                          } else {
        //                                             $post->thumbnail = 'noimg.jpg';
        //                                          }
        //                                      } catch (Exception $e) {
        //                                          $post->thumbnail= 'noimg.jpg';
        //                                      }
        //                                  } else {
        //                                      $post->thumbnail= 'noimg.jpg';
        //                                  }
        //                              } else {

        //                                  $post->thumbnail= 'noimg.jpg';
        //                              }
        //                          }
        //                      } else {
        //                          $post->thumbnail= 'noimg.jpg';
        //                      }
        //                      $data = str_replace('src=', '',   $post->thumbnail);
        //                      $data = str_replace('/storage/', '',   $post->thumbnail);
        //                      $post->thumbnail= $data ;
        //                      $post->save();
        //                  }

        //             }});


        // }
        // []
        DB::table('posts')
            ->orderBy('id')->chunk(500,  function ($rows) {
                foreach ($rows as $row) {
                    $post = Post::find($row->id);
                    if ($post) {
                        $this->info($post->id);
                        $post->content = str_replace('http://www.vanhoanghean.com.vn', '', $post->content);
                        $post->thumbnail = str_replace('http://www.vanhoanghean.com.vn', '', $post->thumbnail);

                        $post->save();
                    }
                }
            });
    }
}
