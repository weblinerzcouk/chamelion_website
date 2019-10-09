<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('pprice')->nullable();
            $table->decimal('sprice')->nullable();
            $table->string('featured_image')->nullable();
            $table->integer('status')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('product_models');
    }
}
