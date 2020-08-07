<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSectionPostPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_section_post', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_1798689')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedInteger('content_section_id');
            $table->foreign('content_section_id', 'content_section_id_fk_1798689')->references('id')->on('content_sections')->onDelete('cascade');
        });
    }
}
