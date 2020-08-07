<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWhitePapersTable extends Migration
{
    public function up()
    {
        Schema::table('white_papers', function (Blueprint $table) {
            $table->unsignedInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_1944588')->references('id')->on('staff');
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1944589')->references('id')->on('statuses');
        });
    }
}
