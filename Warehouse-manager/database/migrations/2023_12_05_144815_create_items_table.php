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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->float('dimension');
            $table->float('length');
            $table->string('ID/OD');
            $table->unsignedBigInteger('stativ_id');
            $table->foreign('stativ_id')->references('id')->on('stativs');
            $table->foreign('stativ_rows')->references('rows')->on('stativs');
            $table->foreign('stativ_columns')->references('columns')->on('stativs');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
