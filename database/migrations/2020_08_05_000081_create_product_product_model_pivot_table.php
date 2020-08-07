<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductModelPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_product_model', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1235501')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedInteger('product_model_id');
            $table->foreign('product_model_id', 'product_model_id_fk_1235501')->references('id')->on('product_models')->onDelete('cascade');
        });
    }
}
