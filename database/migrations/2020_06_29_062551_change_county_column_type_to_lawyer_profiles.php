<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCountyColumnTypeToLawyerProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lawyer_profiles', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->unsignedBigInteger('country_id')->nullable()->index();
            $table->foreign('country_id')
                  ->onDelete('cascade')
                  ->references('id')
                  ->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lawyer_profiles', function (Blueprint $table) {
            $table->string('country',50)->nullable();
            $table->dropForeign(['country_id']);
            $table->dropIndex(['country_id']);
            $table->dropColumn('country_id');
        });
    }
}
