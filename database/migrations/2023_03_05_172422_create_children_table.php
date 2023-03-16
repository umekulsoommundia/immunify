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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string("childName");
            $table->string("age");
            $table->string("weight");
            $table->string("medicalIssue");
            $table->string("birth");
            $table->string("address");
            $table->integer("parentId");
            $table->foreign("parentId")->on("id")->references("parents");
            $table->integer("vaccineId");
            $table->foreign("vaccineId")->on("id")->references("vaccines");
            $table->string("time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
