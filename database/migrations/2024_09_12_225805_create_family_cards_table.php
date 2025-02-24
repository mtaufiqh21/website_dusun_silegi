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
        Schema::create('family_cards', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 160);
            $table->string('name',100);
            $table->text('address')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->text('family_card_identity')->nullable();
            $table->string('wilayah')->nullable();
            $table->smallInteger('rw')->nullable();
            $table->smallInteger('rt')->nullable();
            $table->boolean('active_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_cards');
    }
};
