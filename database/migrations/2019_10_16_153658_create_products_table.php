<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('catalog_id');
            $table->string('code');
            $table->unsignedInteger('set_id')->nullable()->index();
            $table->string('vendor_code')->nullable();
            $table->string('name');
            $table->text('measures')->nullable();
            $table->text('prices')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('country_import')->nullable();
            $table->string('country_origin')->nullable();
            $table->text('warranty')->nullable();
            $table->string('barcode')->nullable();
            $table->mediumText('intro')->nullable();
            $table->mediumText('description')->nullable();
            $table->text('image')->nullable();
            $table->text('images')->nullable();
            $table->text('properties')->nullable();
            $table->unsignedInteger('quantity');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
