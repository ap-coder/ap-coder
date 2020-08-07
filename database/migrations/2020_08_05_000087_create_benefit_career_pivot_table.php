<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitCareerPivotTable extends Migration
{
    public function up()
    {
        Schema::create('benefit_career', function (Blueprint $table) {
            $table->unsignedInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_1279530')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedInteger('benefit_id');
            $table->foreign('benefit_id', 'benefit_id_fk_1279530')->references('id')->on('benefits')->onDelete('cascade');
        });
    }
}
