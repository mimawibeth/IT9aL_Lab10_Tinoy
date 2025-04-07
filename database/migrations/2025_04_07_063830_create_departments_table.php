<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id('department_id'); // Define the primary key column
            $table->string('department_name'); // Define the department name column
            $table->unsignedBigInteger('location_id')->nullable(); // Define location_id as a nullable foreign key
            $table->timestamps(); // Define created_at and updated_at columns
            
            // Add the foreign key constraint
            $table->foreign('location_id')->references('location_id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}