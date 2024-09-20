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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug')->unique()->nullable();
            $table->date('posting_date',30);
            $table->string('author', 50)->nullable();
            $table->text('image')->nullable();
            $table->string('short_description', 50);
            $table->longText('long_description');
            $table->boolean('active_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
