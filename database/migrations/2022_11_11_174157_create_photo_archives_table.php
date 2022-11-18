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
        Schema::create('photo_archives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->string('filename');
            $table->string('origin');
            $table->text('description')->nullable();
            $table->text('region')->nullable();
            $table->integer('count_likes')->nullable();
            $table->integer('count_complains')->nullable();
            $table->boolean('shadow_ban')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_archives');
    }
};
