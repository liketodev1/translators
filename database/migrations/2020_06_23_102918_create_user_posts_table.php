<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('country_id')->index();
            $table->unsignedBigInteger('specialization_id')->index();
            $table->string('state',50);
            $table->string('city',50);
            $table->string('address',50);
            $table->smallInteger('billing_type');
            $table->integer('price');
            $table->text('description');
            $table->boolean('status')->default(true);
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
            $table->foreign('user_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('users');
            $table->foreign('country_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('countries');
            $table->foreign('specialization_id')
                ->onDelete('cascade')
                ->references('id')
                ->on('specializations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_posts');
    }
}
