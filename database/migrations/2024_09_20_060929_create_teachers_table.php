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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('default.png');
            $table->string('top_image')->default('default.png');
            $table->string('about_image')->default('default.png');
            $table->string('name')->default('0');
            $table->string('phone')->default('0');
            $table->string('email')->default('0');
            $table->string('department')->default('computer');
            $table->string('role')->default('teacher');
            $table->string('short_des')->default('0');
            $table->string('aboutme_des')->default('0');
            $table->string('address')->default('0');
            $table->string('status')->default('active');
            $table->string('password')->default('dpcteacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
