<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTestimonialPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_testimonial', function (Blueprint $table) {
            $table->unsignedInteger('testimonial_id');
            $table->foreign('testimonial_id', 'testimonial_id_fk_1693647')->references('id')->on('testimonials')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_1693647')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
