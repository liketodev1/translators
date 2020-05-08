<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('lang_from_id')->index();
            $table->unsignedBigInteger('lang_to_id')->index();
            $table->integer('slow')->nullable();
            $table->integer('standard')->nullable();
            $table->integer('urgent')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('users');
            $table->foreign('lang_from_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('options');
            $table->foreign('lang_to_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_user');
    }
}
