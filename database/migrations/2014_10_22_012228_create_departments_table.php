<?php

/**
 * This file is part of the HRis Software package.
 *
 * HRis - Human Resource and Payroll System
 *
 * @link    http://github.com/HB-Co/HRis
 *
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsTable extends Migration
{
    /**
     * Reverse the migrations.
     *
     * @return void
     * @author Bertrand Kintanar
     */
    public function down()
    {
        Schema::drop('departments');
    }

    /**
     * Run the migrations.
     *
     * @return void
     * @author Bertrand Kintanar
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
    }
}
