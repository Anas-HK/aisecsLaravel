<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualUsersTable extends Migration
{
    public function up()
    {
        Schema::create('individual_users', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('next_of_kin')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('individual_users');
    }
}
