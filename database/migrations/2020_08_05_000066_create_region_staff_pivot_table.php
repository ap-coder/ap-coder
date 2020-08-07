<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionStaffPivotTable extends Migration
{
    public function up()
    {
        Schema::create('region_staff', function (Blueprint $table) {
            $table->unsignedInteger('staff_id');
            $table->foreign('staff_id', 'staff_id_fk_1656563')->references('id')->on('staff')->onDelete('cascade');
            $table->unsignedInteger('region_id');
            $table->foreign('region_id', 'region_id_fk_1656563')->references('id')->on('regions')->onDelete('cascade');
        });
    }
}
