<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryWhitePaperPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_white_paper', function (Blueprint $table) {
            $table->unsignedInteger('white_paper_id');
            $table->foreign('white_paper_id', 'white_paper_id_fk_1944592')->references('id')->on('white_papers')->onDelete('cascade');
            $table->unsignedInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_1944592')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
