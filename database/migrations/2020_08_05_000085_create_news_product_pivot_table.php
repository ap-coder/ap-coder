<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('news_product', function (Blueprint $table) {
            $table->unsignedInteger('news_id');
            $table->foreign('news_id', 'news_id_fk_1798690')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1798690')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
