<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqCategoryFaqQuestionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('faq_category_faq_question', function (Blueprint $table) {
            $table->unsignedInteger('faq_question_id');
            $table->foreign('faq_question_id', 'faq_question_id_fk_1720315')->references('id')->on('faq_questions')->onDelete('cascade');
            $table->unsignedInteger('faq_category_id');
            $table->foreign('faq_category_id', 'faq_category_id_fk_1720315')->references('id')->on('faq_categories')->onDelete('cascade');
        });
    }
}
