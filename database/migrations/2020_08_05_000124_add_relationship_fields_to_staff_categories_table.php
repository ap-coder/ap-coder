<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStaffCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('staff_categories', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720439')->references('id')->on('doc_types');
        });
    }
}
