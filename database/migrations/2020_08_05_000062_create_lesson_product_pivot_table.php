<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('lesson_product', function (Blueprint $table) {
            $table->unsignedInteger('lesson_id');
            $table->foreign('lesson_id', 'lesson_id_fk_1620663')->references('id')->on('lessons')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1620663')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
