<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('immunizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_id')->constrained('children')->onDelete('cascade');
            $table->string('vaksin_type');
            $table->date('immunization_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('immunizations');
    }
};
