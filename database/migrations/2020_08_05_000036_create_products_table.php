<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->longText('short')->nullable();
            $table->string('demo_request_link')->nullable();
            $table->string('demo_form')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->string('chicklet')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('facebook_title')->nullable();
            $table->longText('facebook_desc')->nullable();
            $table->string('twitter_post_title')->nullable();
            $table->longText('twitter_post_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
