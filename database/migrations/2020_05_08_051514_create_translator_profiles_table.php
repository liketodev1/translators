<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslatorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translator_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->mediumText('linkedin')->nullable();
            $table->string('resume')->nullable();
            $table->text('biography')->nullable();
            $table->tinyInteger('experience')->nullable();
            $table->boolean('public_sector')->nullable();
            $table->boolean('private_sector')->nullable();
            $table->boolean('education')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                  ->onDelete('cascade')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translator_profiles');
    }
}
