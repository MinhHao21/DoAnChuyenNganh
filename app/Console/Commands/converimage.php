<?php

namespace App\Console\Commands;

use App\Models\Fileupload;
use App\Models\Post;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class converimage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $post = Post::all();
        foreach ($post as $p) {
            preg_match_all('/<img[^>]+>/i', $p->content, $result);
            if ($result[0]) {
                if ($result[0][0]) {
                    preg_match_all('/(src)=("[^"]*")/i', $result[0][0], $img);
                    $data = str_replace('src=', '', $img[0][0]);
                    $data = str_replace('"', '', $data);
                    $p->thumbnail = $data;
                    try {
                        $p->save();
                    }
                    //catch exception
                    catch (Exception $e) {
                        $p->thumbnail ="stp.png";
                        $p->save();
                    }
                } else {
                    $p->thumbnail ="stp.png";
                    $p->save();
                }
            } else {
                $p->thumbnail ="stp.png";
                $p->save();
            }
       
        }
    }
}
