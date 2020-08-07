<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrFeatureQrFeatureCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('qr_feature_qr_feature_category', function (Blueprint $table) {
            $table->unsignedInteger('qr_feature_category_id');
            $table->foreign('qr_feature_category_id', 'qr_feature_category_id_fk_1542978')->references('id')->on('qr_feature_categories')->onDelete('cascade');
            $table->unsignedInteger('qr_feature_id');
            $table->foreign('qr_feature_id', 'qr_feature_id_fk_1542978')->references('id')->on('qr_features')->onDelete('cascade');
        });
    }
}
