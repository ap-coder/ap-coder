<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQrFeaturesTable extends Migration
{
    public function up()
    {
        Schema::table('qr_features', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_1720441')->references('id')->on('statuses');
        });
    }
}
