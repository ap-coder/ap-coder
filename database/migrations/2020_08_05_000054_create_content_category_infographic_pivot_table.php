<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryInfographicPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_infographic', function (Blueprint $table) {
            $table->unsignedInteger('infographic_id');
            $table->foreign('infographic_id', 'infographic_id_fk_1944660')->references('id')->on('infographics')->onDelete('cascade');
            $table->unsignedInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_1944660')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
