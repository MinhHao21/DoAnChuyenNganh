<?php

namespace App\Console\Commands;

use App\Models\Danhmuc;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Carbon\Carbon;

class converdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:check';

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
        $danhmuc = Danhmuc::get();
        foreach ($danhmuc as $dm) {
            
            $cat = Danhmuc::find($dm->id);
            if($cat->danhmuc_id == 0){
                $cat->danhmuc_id = null;
                
            }
            $cat->save();
        }
    }
}
