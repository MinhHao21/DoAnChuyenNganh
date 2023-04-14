<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->json('danhmuc_id')->nullable();
            $table->longtext('thumbnail')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->longtext('content')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('created_by')->nullable();
            $table->integer('ordering')->nullable();
            $table->integer('luotxem')->nullable();
            $table->boolean('noibat')->nullable();
            $table->foreignId('published_by')->nullable();
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
