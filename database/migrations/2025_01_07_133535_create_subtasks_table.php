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
        Schema::create('subtasks', function (Blueprint $table) {
            $table->id();
            $table->IdTask();
            $table->Name();
            $table->Description();
            $table->Status();
            $table->CreatedAt();
            $table->UpdatedAt();
            $table->foreign('IdTask')->references('id')->on('tasks')->onDelete('cascade');
            
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtasks');
    }
};
