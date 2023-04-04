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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id('eqm_id');
            $table->string('eqm_name');
            $table->string('eqm_serial_number');
            $table->string('eqm_picture');
            $table->unsignedbiginteger('eqm_emp_id');
            $table->timestamps();

            $table->foreign('eqm_emp_id')->references('emp_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
};
