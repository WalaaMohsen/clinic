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
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paitient_id');
            $table->unsignedBigInteger('doctor_id');
            $table->enum('severity',[1,2,3,4]);
            $table->text('general_diagnosis');
            $table->text('detaild_diagnosis');
            $table->string('prescription_image');
            $table->foreign('paitient_id')->references('id')->on('paitients');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses');
    }
};
