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
            $table->id();
            $table->string('name', 191);
            $table->mediumText('desc')->nullable();

            $table->float('price', 8, 3)->nullable();
            $table->integer('discount')->nullable();

            $table->integer('qt')->nullable();
            $table->boolean('hot')->default(0);

            $table->json('options')->nullable();

            $table->foreignId('type_id')->nullable();
            $table->foreignId('unit_id')->nullable();

            $table->boolean('active')->default(0);
            $table->timestamps();
            $table->softDeletes();
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
