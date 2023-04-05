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
        Schema::create('task_requests', function (Blueprint $table) {
            $table->id('tre_id');
            $table->string('tre_status');
            $table->datetime('tre_approved');
            $table->datetime('tre_success_date');
            $table->datetime('tre_get_date');
            $table->string('tre_quantity_request');
            $table->unsignedbiginteger('tre_emp_id');
            $table->timestamps();

            $table->foreign('tre_emp_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_requests');
    }
};
