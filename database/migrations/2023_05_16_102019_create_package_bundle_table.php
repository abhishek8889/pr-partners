<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_bundle', function (Blueprint $table) {
            $table->id();
            $table->integer('press_package_category_id');
            $table->string('title');
            $table->float('bundle_price');
            $table->float('retail_price');
            $table->string('publication_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_bundle');
    }
};
