<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeTrackerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_tracker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->references('id')->on('employees');
            $table->timestamp('checkin');
            $table->timestamp('checkout')->nullable();
            $table->integer('total_hours')->nullable();
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
        Schema::dropIfExists('time_tracker');
    }
}
