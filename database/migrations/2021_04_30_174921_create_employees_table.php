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
            $table->string('firstname',60);
            $table->string('middlename',60);
            $table->string('lastname',60);
            $table->string('address',120);
            $table->bigInteger('department_id');
            $table->bigInteger('city_id');
            $table->bigInteger('state_id');
            $table->bigInteger('country_id');
            $table->string('zip',10);
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
