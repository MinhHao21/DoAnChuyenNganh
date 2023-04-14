<?php

namespace App\Console\Commands;

use App\Models\Fileupload;
use Illuminate\Console\Command;

class Converlinkview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conver:link';

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
       $file = Fileupload::all();
       foreach($file as $f)
       {
        $f->linkview =  str_replace('//', '/',  $f->linkview);
        $f->save();
       }
    }
}
