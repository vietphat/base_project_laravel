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
        Schema::create('app_users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 256)->unique();
            $table->string('password_hash', 256);
            $table->string('password_salt', 256);
            $table->string('password_salt', 256);
            $table->string('phone_number_1', 20);
            $table->string('phone_number_2', 20)->nullable();
            $table->string('email', 256)->nullable();
            $table->string('address', 256)->nullable();
            $table->string('avatar', 256)->nullable();
            $table->date('blocked_to')->nullable();
            $table->integer('blocked_by')->nullable();
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
        Schema::dropIfExists('app_users');
    }
};
