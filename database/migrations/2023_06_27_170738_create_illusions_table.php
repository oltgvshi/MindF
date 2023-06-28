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
        Schema::create('illusions', function (Blueprint $table) {

            $table->id();
            $table->string('image_url');
            $table->string('name'); 
            $table->string('description'); 
            $table->string('what'); 
            $table->string('how'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('illusions');
    }
};
