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
            $table->id(); // Primary key dengan auto_increment
            $table->integer('nis')->unique();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->smallInteger('class');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->bigInteger('phone_number')->nullable();
            $table->string('gender');
            $table->string('address');
            $table->date('date_of_birth',30);
            $table->boolean('active_status')->default(1);
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
