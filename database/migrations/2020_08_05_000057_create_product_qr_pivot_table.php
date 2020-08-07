<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductQrPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_qr', function (Blueprint $table) {
            $table->unsignedInteger('qr_id');
            $table->foreign('qr_id', 'qr_id_fk_1543459')->references('id')->on('qrs')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1543459')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
