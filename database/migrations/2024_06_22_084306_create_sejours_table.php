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
        Schema::create('sejours', function (Blueprint $table) {
            $table->id('NumSejour');
            $table->unsignedBigInteger('CodeReservation');
            $table->date('DateSejour');
            $table->string('TypeSejour');
            $table->integer('DureeSejour');
            $table->timestamps();
            $table->foreign('CodeReservation')->references('CodeReservation')->on('reservations')->onDelete('cascade');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sejours');
    }
};
