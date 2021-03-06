<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocProductCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_product_category', function (Blueprint $table) {
            $table->unsignedInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_1232053')->references('id')->on('docs')->onDelete('cascade');
            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id', 'product_category_id_fk_1232053')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }
}
