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
            $table->integer("nip")->nullable();
            $table->string('name',100);
            $table->string('email',100)->unique()->nullable();
            $table->string('position_category',100);
            $table->string('position',100);
            $table->text('image')->nullable();
            $table->string("gender", 25);
            $table->boolean('active_status')->default(1);
            $table->timestamps();

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
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
