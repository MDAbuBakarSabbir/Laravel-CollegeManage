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
        Schema::create('deparments', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('default.png');
            $table->string('title')->default('default.png');
            $table->string('short_des')->default('default.png');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deparments');
    }
};
