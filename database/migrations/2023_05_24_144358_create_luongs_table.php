<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luongs', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('nhanvien_id');
            $table->decimal('salary', 10, 2);
            $table->date('paid_date');
            $table->timestamps();

            $table->foreign('nhanvien_id')->references('id')->on('nhanvien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luongs');
    }
}
