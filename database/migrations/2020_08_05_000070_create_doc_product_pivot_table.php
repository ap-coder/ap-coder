<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_product', function (Blueprint $table) {
            $table->unsignedInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_1230681')->references('id')->on('docs')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1230681')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
