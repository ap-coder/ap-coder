<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSectionNewsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_section_news', function (Blueprint $table) {
            $table->unsignedInteger('news_id');
            $table->foreign('news_id', 'news_id_fk_1798688')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedInteger('content_section_id');
            $table->foreign('content_section_id', 'content_section_id_fk_1798688')->references('id')->on('content_sections')->onDelete('cascade');
        });
    }
}
