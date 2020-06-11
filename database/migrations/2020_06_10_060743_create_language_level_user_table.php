<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageLevelUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_level_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('language_id')->index();
            $table->unsignedBigInteger('language_level_id')->index();
            $table->foreign('user_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('users');
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
        Schema::dropIfExists('language_level_user');
    }
}
