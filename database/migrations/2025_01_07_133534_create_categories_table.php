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
        Schema::create('categories', function (Blueprint $table) {
            $table->Id();
            $table->IdUser();
            $table->Name();
            $table->Status();
            $table->CreatedAt();
            $table->UpdatedAt();
            $table->timestamps();
            $table->foreign('IdUser')->references('id')->on('users')->onDelete('cascade');

        });

        DB::table('categories')->insert(
            [
            'name' => 'trabalho',
            'IdUser' => 1,
            'Status' => 1
            ],
            [
            'name' => 'eventos',
            'IdUser' => 1,
            'Status' => 1
            ]
        ); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
