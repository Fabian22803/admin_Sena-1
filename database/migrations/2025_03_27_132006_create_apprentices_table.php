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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //nombre
            $table->string('email')->unique();//correo unico
            $table->string('cell number');

           
            $table->unsignedBigInteger('computer_id')->unique();
            $table->unsignedBigInteger('course_id')->unique();
            
            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
            
            $table->foreign('course_id')        
                ->references('id')
                ->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};
