<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('description', 100);
            $table->string('block', 250);
            $table->string('block2', 250)->nullable();            
            $table->string('block3', 250)->nullable();
            $table->string('path_media', 250);
            $table->string('path_media2', 250)->nullable();
            $table->string('path_media3', 250)->nullable();
            $table->char('rate', 1);
            $table->boolean('active')->default(true);
            $table->unsignedInteger('category_id');                        
            $table->unsignedInteger('user_id');            
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');                                   
            $table->foreign('user_id')->references('id')->on('users');                       
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
