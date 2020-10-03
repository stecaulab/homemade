<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Setup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //
        //Creation Articles Table
        //

        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('slug')->index();

            $table->longText('body');

            $table->boolean('is_published');
            $table->dateTime('published_at');

            $table->string('meta_keys');
            $table->string('meta_description');

            $table->integer('user_id')->unsigned()->index();

            $table->timestamps();
        });

        //
        //Creation Categories Table
        //

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->index();

            $table->text('description');

            $table->timestamps();
        });

        //
        //Creation Article_Category TablePivot
        //

        Schema::create('article_category', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('article_id')->unsigned();
            $table->integer('category_id')->unsigned();

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
        Schema::drop('categories');
        Schema::drop('article_category');
    }
}