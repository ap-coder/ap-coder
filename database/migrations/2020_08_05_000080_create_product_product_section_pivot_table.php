<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductSectionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_product_section', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1798695')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedInteger('product_section_id');
            $table->foreign('product_section_id', 'product_section_id_fk_1798695')->references('id')->on('product_sections')->onDelete('cascade');
        });
    }
}
