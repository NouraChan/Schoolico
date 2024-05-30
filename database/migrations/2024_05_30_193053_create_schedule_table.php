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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('time');
            $table->timestamps();
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->refrences('id')->on('subject');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->refrences('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};