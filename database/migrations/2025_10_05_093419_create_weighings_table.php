<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('weighings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mother_id')->constrained('mothers')->onDelete('cascade');
            $table->foreignId('child_id')->constrained('children')->onDelete('cascade');
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('lingkar_kepala')->nullable();
            $table->float('lingkar_badan')->nullable();
            $table->date('weighing_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weighings');
    }
};
