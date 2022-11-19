<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('history_id');
            $table->string('title');
            $table->string('tag');
            $table->longText('body')->nullable();
            $table->string('preview')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('region_id')->nullable();
            $table->foreign('region_id')->references('region_id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('views')->nullable();
            $table->unsignedBigInteger('likes')->nullable();
            $table->unsignedBigInteger('shares')->nullable();
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
        Schema::table('histories', function (Blueprint $table)
        {
            $table->dropForeign('histories_user_id_foreign');
            $table->dropColumn('user_id');
            $table->dropForeign('histories_region_id_foreign');
            $table->dropColumn('region_id');
        });
        Schema::dropIfExists('histories');
    }
};
