<?php

namespace Database\Seeders;

use App\Models\Caulacbo;
use App\Models\Disannghethuat;
use App\Models\Nghesynghenhan;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
    
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mayviet.net',
            'password' => Hash::make('secret'),
        ]);
    }
}
