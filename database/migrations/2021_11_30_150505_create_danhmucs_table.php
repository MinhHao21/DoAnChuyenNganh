<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmucs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loaidanhmuc_id')->nullable();
            $table->string('danhmuc_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('thutu')->default(100);
            $table->boolean('hienthi')->nullable();
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhmucs');
    }
}
