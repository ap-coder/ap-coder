<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerEmploymentTypePivotTable extends Migration
{
    public function up()
    {
        Schema::create('career_employment_type', function (Blueprint $table) {
            $table->unsignedInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_1236616')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedInteger('employment_type_id');
            $table->foreign('employment_type_id', 'employment_type_id_fk_1236616')->references('id')->on('employment_types')->onDelete('cascade');
        });
    }
}
