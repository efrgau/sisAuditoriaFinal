<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valevaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategoryId');
            $table->string('abrevalorcat');
            $table->string('nombreValorcat');
            $table->foreign('subcategoryId')->references('id')->on('subcategories')->onDelete('cascade');
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
        Schema::dropIfExists('valevaluations');
    }
}
