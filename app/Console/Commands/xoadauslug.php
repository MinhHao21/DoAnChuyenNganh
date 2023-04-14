<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class xoadauslug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xoadau:slug';

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

        $post = Post::chunk(50,  function ($post){
            foreach($post as $p){

                $slugnew = str_replace('/', '-', $p->slug);
                $p->slug = $slugnew;
                $p-> save();
                $this->info($p->name);
    
            }
        });
        
    }
}
