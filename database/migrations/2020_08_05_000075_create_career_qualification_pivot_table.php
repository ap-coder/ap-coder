<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerQualificationPivotTable extends Migration
{
    public function up()
    {
        Schema::create('career_qualification', function (Blueprint $table) {
            $table->unsignedInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_1280523')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedInteger('qualification_id');
            $table->foreign('qualification_id', 'qualification_id_fk_1280523')->references('id')->on('qualifications')->onDelete('cascade');
        });
    }
}
