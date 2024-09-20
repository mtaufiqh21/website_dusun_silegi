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
        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->unique();
            $table->string('name',100)->nullable();
            $table->string('email',100)->unique()->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->string('address');
            $table->string("gender", 25);
            $table->text('identity_card')->nullable();
            $table->boolean('active_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villagers');
    }
};
