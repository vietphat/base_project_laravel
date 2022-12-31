<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('app_users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 256)->unique();
            $table->string('fullname', 256);
            $table->string('password', 256);
            $table->string('phone_number_1', 20)->nullable();
            $table->string('phone_number_2', 20)->nullable();
            $table->string('address', 256)->nullable();
            $table->string('avatar', 256)->default('default.png')->nullable();
            $table->date('blocked_to')->nullable();
            $table->integer('blocked_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_users');
    }
};
