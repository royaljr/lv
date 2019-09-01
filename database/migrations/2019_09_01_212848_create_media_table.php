<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('model');
            $table->string('collection_name');
            $table->string('name', 128);
            $table->string('file_name', 32);
            $table->string('mime_type')->nullable();
            $table->string('disk');
            $table->unsignedInteger('size');
            $table->text('manipulations');
            $table->text('custom_properties');
            $table->text('responsive_images');
            $table->unsignedInteger('order_column')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
}
