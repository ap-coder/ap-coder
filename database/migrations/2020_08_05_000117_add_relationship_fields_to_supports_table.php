<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSupportsTable extends Migration
{
    public function up()
    {
        Schema::table('supports', function (Blueprint $table) {
            $table->unsignedInteger('assign_to_id')->nullable();
            $table->foreign('assign_to_id', 'assign_to_fk_1543460')->references('id')->on('users');
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720077')->references('id')->on('statuses');
        });
    }
}
