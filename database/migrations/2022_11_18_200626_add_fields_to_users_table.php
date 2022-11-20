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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role',['user', 'manager', 'admin'])->after('user_id')->default('user');
            $table->string('name_s')->after('name_f')->default('');
            $table->boolean('volunteer')->default(false);
            $table->enum("sex",['male', 'female', 'not_decided'])->default('not_decided');
            $table->string('birthday')->default('');
            $table->string('phone')->default('');
            $table->string('phone2')->default('');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('avatar')->default('');
            $table->text('about_me')->nullable();
            $table->boolean('hide_avatar')->default(false);
            $table->boolean('hide_name')->default(false);
            $table->boolean('hide_sex')->default(false);
            $table->boolean('hide_birthday')->default(false);
            $table->boolean('hide_phone')->default(false);
            $table->boolean('hide_native_cite')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropForeign('users_city_id_foreign');
            $table->dropColumn('city_id');
        });
    }
};
