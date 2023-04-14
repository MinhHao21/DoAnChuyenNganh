<?php

namespace App\Console\Commands;

use App\Models\Document;
use App\Models\Fileupload;
use Illuminate\Console\Command;

class converfileupdload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conver:fileupload';

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
            $datafileupload = Fileupload::where('tenbang','documents')->where('id','>=',2)->where('id','<',88)->get();
          
            $n = 2;
            foreach($datafileupload as $fl){
                $fl->idtruong = ++$n;
                $fl->save();
            }
      
      
        
    }
}
