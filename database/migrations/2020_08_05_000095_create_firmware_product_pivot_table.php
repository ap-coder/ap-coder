<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmwareProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('firmware_product', function (Blueprint $table) {
            $table->unsignedInteger('firmware_id');
            $table->foreign('firmware_id', 'firmware_id_fk_1232060')->references('id')->on('firmware')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1232060')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
