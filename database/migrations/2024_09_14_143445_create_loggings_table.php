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
        Schema::create('loggings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('path')->nullable();
            $table->string('device')->nullable();
            $table->boolean('is_desktop')->default(0);
            $table->boolean('is_mobile')->default(0);
            $table->boolean('is_tablet')->default(0);
            $table->string('ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loggings');
    }
};
