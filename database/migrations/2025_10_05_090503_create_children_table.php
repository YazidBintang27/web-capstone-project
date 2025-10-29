<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mother_id')->constrained('mothers')->onDelete('cascade');
            $table->string('name');
            $table->date('birthdate')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->string('nutritional_status')->nullable();
            $table->enum('gender', ['L', 'P']); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
