<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportSupportCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('support_support_category', function (Blueprint $table) {
            $table->unsignedInteger('support_id');
            $table->foreign('support_id', 'support_id_fk_1236537')->references('id')->on('supports')->onDelete('cascade');
            $table->unsignedInteger('support_category_id');
            $table->foreign('support_category_id', 'support_category_id_fk_1236537')->references('id')->on('support_categories')->onDelete('cascade');
        });
    }
}
