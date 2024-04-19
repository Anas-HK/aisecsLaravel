<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessUsersTable extends Migration
{
    public function up()
    {
        Schema::create('business_users', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('company_rep_name');
            $table->date('date_of_birth');
            $table->string('position');
            $table->string('contact_number');
            $table->string('business_number');
            $table->string('company_rep_email')->unique();
            $table->string('username');
            $table->string('business_name');
            $table->string('business_details');
            $table->string('business_address');
            $table->string('business_phone');
            $table->string('business_email');
            $table->string('business_website')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('business_users');
    }
}
