<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_photo', function (Blueprint $table) {
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->foreign('photo_id')->references('photo_id')->on('photos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('history_id')->nullable();
            $table->foreign('history_id')->references('history_id')->on('histories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('history_photo', function (Blueprint $table)
        // {
        //     $table->dropForeign(['photo_id']);
        //     $table->dropColumn('photo_id');
        // });
        Schema::dropIfExists('history_photo');
    }
};
