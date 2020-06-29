<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostLanguageLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_language_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->index();
            $table->unsignedBigInteger('language_id')->index();
            $table->unsignedBigInteger('language_level_id')->index();
            $table->foreign('post_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('user_posts');
            $table->foreign('language_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('languages');
            $table->foreign('language_level_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('language_levels');
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
        Schema::dropIfExists('post_language_levels');
    }
}
