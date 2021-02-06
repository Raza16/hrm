<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_no');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('qualification');
            $table->string('cnic');
            $table->string('mobile_no');
            $table->string('home_phone');
            $table->string('emergency_contact');
            $table->string('email');
            $table->string('other_email');
            $table->string('country');
            $table->string('province_state');
            $table->string('city');
            $table->string('nationality');
            $table->string('postal_code');
            $table->string('address');
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
        Schema::dropIfExists('employees');
    }
}
