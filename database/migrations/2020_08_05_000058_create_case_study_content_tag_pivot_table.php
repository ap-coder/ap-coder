<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyContentTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('case_study_content_tag', function (Blueprint $table) {
            $table->unsignedInteger('case_study_id');
            $table->foreign('case_study_id', 'case_study_id_fk_1944633')->references('id')->on('case_studies')->onDelete('cascade');
            $table->unsignedInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_1944633')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
