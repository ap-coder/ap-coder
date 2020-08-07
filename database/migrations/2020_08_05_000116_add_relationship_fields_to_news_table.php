<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720263')->references('id')->on('statuses');
            $table->unsignedInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_1798687')->references('id')->on('staff');
        });
    }
}
