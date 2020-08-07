<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentStaffPivotTable extends Migration
{
    public function up()
    {
        Schema::create('department_staff', function (Blueprint $table) {
            $table->unsignedInteger('staff_id');
            $table->foreign('staff_id', 'staff_id_fk_1236754')->references('id')->on('staff')->onDelete('cascade');
            $table->unsignedInteger('department_id');
            $table->foreign('department_id', 'department_id_fk_1236754')->references('id')->on('departments')->onDelete('cascade');
        });
    }
}
