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
        Schema::create('vaccinateds', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("dob");
            $table->string("age");
            $table->string("weight");
            $table->string("medicalIssue");
            $table->string("date");
            $table->string("Timing");
            $table->string("vaccineType");
            $table->string("childImage");
            $table->integer("parentId");
            $table->foreign("parentId")->on("id")->references("user_parents");
            $table->integer("hospitalId");
            $table->foreign("hospitalId")->on("id")->references("added_hospitals");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccinateds');
    }
};
