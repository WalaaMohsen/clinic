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
        Schema::create('paitients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_doctor');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('house_number',10);
            $table->foreign('id_doctor')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paitients');
    }
};
