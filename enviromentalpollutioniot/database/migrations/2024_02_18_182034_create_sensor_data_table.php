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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            // $table->string('sensor_type');
            $table->float('temperature')->nullable();
            $table->float('humidity')->nullable();
            $table->float('alcohol_concentration')->nullable();
            $table->float('air_quality_index')->nullable();
            $table->timestamp('timestamp')->nullable();
            $table->timestamps();
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
