<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720184')->references('id')->on('statuses');
            $table->unsignedInteger('industries_id')->nullable();
            $table->foreign('industries_id', 'industries_fk_1745030')->references('id')->on('industries');
        });
    }
}
