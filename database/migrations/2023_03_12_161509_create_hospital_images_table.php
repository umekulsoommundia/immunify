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
        Schema::create('hospital_images', function (Blueprint $table) {
            $table->id();
            $table->string('hospitalImages');
            $table->integer('hospitalId');
            $table->foreign('hospitalId')->references('id')->on('hospitals');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_images');
    }
};
