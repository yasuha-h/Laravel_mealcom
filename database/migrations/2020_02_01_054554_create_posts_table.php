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
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()
                  ->foreign('user_id')->references('id')
                  ->on('users');
            $table->binary('img_1')->nullable(false);
            $table->binary('img_2')->nullable();
            $table->binary('img_3')->nullable();
            $table->binary('img_4')->nullable();
            $table->text('content','140')->nullable();
            $table->integer('nice_count')->nullable();
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
