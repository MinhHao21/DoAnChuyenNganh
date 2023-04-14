<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class convertcat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        
        $datacategorys = DB::connection('mysql2')
        ->table('vhna25_k2_categories')->get();
        foreach($datacategorys as $datacategory){
            $cats = new Danhmuc();
            $cats->id = $datacategory->id;
            $cats->name = $datacategory->name;
            $cats->slug = $datacategory->alias;
            $cats->danhmuc_id = $datacategory->parent;
            $cats->thutu = $datacategory->ordering;
            $cats->save();
        }
        return 'ok';

    
    }
}
