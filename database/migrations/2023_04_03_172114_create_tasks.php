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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('task_id');
            $table->string('task_status');
            $table->string('task_type');
            $table->datetime('task_approved');
            $table->datetime('task_success_date');
            $table->datetime('task_get_date');
            $table->string('task_details_repair');
            $table->string('task_quantity_request');
            $table->string('task_details_assess');
            $table->string('task_stars');
            $table->unsignedbiginteger('task_eqm_id');
            $table->unsignedbiginteger('task_emp_id');
            $table->timestamps();

            $table->foreign('task_eqm_id')->references('eqm_id')->on('equipments');
            $table->foreign('task_emp_id')->references('emp_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
