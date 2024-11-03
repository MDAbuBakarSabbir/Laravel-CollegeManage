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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('default.png');
            $table->string('name')->default('0');
            $table->string('father')->default('0');
            $table->string('mother')->default('0');
            $table->string('guardian')->default('0');
            $table->string('father_phone')->default('0');
            $table->string('mother_phone')->default('0');
            $table->string('guardian_phone')->default('0');
            $table->string('phone')->default('000000000');
            $table->string('ault_phone')->default('000000000');
            $table->string('nid')->default('0');
            $table->string('birth_id')->default('0');
            $table->string('blood')->default('0');
            $table->string('date_of_birth')->default('0');
            $table->string('religion')->default('0');
            $table->string('gender')->default('0');
            $table->string('email')->unique();
            $table->string('nationality')->default('0');
            $table->string('present_division')->default('0');
            $table->string('present_district')->default('0');
            $table->string('present_upazila')->default('0');
            $table->string('present_address')->default('0');
            $table->string('permanent_division')->default('0');
            $table->string('permanent_district')->default('0');
            $table->string('permanent_upazila')->default('0');
            $table->string('permanent_address')->default('0');
            $table->string('department')->default('0');
            $table->string('semester')->default('first');
            $table->string('status')->default('active');
            $table->string('password')->default('dpcstudent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
