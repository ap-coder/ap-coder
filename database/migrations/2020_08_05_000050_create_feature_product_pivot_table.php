<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('feature_product', function (Blueprint $table) {
            $table->unsignedInteger('feature_id');
            $table->foreign('feature_id', 'feature_id_fk_1627882')->references('id')->on('features')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1627882')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
