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
        Schema::create('task_repairs', function (Blueprint $table) {
            $table->id('tr_id');
            $table->string('tr_status');
            $table->datetime('tr_approved');
            $table->datetime('tr_success_date');
            $table->datetime('tr_get_date');
            $table->string('tr_details_repair');
            $table->unsignedbiginteger('tr_eqm_id');
            $table->unsignedbiginteger('tr_emp_id');
            $table->timestamps();

            $table->foreign('tr_eqm_id')->references('eqm_id')->on('equipments');
            $table->foreign('tr_emp_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_repairs');
    }
};
