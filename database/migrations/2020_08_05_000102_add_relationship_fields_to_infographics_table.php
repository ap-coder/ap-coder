<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInfographicsTable extends Migration
{
    public function up()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->unsignedInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_1944656')->references('id')->on('staff');
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1944657')->references('id')->on('statuses');
        });
    }
}
