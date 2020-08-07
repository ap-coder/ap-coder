<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTagNewsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_tag_news', function (Blueprint $table) {
            $table->unsignedInteger('news_id');
            $table->foreign('news_id', 'news_id_fk_1204057')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_1204057')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
