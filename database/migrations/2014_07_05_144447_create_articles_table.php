<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->default('post'); // post, page
            $table->integer('user_id');
            $table->integer('category_id')->default(0);
            $table->string('title');
            $table->string('slug');
            $table->string('services')->nullable(0);
            $table->text('body');
            $table->integer('sort_order')->nullable();
            $table->string('color', 8)->nullable();
            $table->string('image')->nullable(); // default image
            $table->integer('position')->default(0);
            $table->string('background_small')->nullable();
            $table->string('background_small_2x')->nullable();
            $table->string('background_medium')->nullable();
            $table->string('background_medium_2x')->nullable();
            $table->string('background_large')->nullable();                    
            $table->string('image_left')->nullable();
            $table->string('image_right')->nullable();
            $table->string('published_at')->nullable();
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
        Schema::drop('articles');
    }
}
