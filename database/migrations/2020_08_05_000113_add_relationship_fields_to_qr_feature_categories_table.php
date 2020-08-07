<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQrFeatureCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('qr_feature_categories', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720113')->references('id')->on('statuses');
        });
    }
}
