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
            $table->string('portada', 100);
            $table->string('colorTitulo', 8)->default('#ffffff');
            $table->string('description', 100);
            $table->longText('block');
            $table->longText('block2')->nullable();            
            $table->longText('block3')->nullable();
            $table->string('path_media', 250);
            $table->string('path_media2', 250)->nullable();
            $table->string('path_media3', 250)->nullable();
            $table->float('rate', 8, 2);
            $table->boolean('active')->default(true);
            $table->unsignedInteger('category_id');                        
            $table->unsignedInteger('user_id');            
            $table->timestamps();
            $table->softDeletes();
            
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
