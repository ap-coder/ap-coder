<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContentPagesTable extends Migration
{
    public function up()
    {
        Schema::table('content_pages', function (Blueprint $table) {
            $table->unsignedInteger('section_id')->nullable();
            $table->foreign('section_id', 'section_fk_1633927')->references('id')->on('content_sections');
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720244')->references('id')->on('statuses');
        });
    }
}
