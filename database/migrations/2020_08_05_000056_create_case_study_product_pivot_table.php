<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('case_study_product', function (Blueprint $table) {
            $table->unsignedInteger('case_study_id');
            $table->foreign('case_study_id', 'case_study_id_fk_1944635')->references('id')->on('case_studies')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1944635')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
