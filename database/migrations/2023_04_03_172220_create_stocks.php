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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id('stk_id');
            $table->string('stk_name');
            $table->string('stk_type');
            $table->string('stk_series');
            $table->string('stk_details_equipment');
            $table->string('stk_pictrue');
            $table->biginteger('stk_quantity');
            $table->unsignedbiginteger('stk_emp_id');
            $table->unsignedbiginteger('stk_task_id');
            $table->timestamps();

            $table->foreign('stk_emp_id')->references('emp_id')->on('users');
            $table->foreign('stk_task_id')->references('task_id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
