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
        Schema::create('pruning_requests', function (Blueprint $table) {
            $table->id();
            $table->string('Full_name', 255);
            $table->string('Contact_phone', 255);
            $table->string('email');
            $table->string('address_line_1', 255);
            $table->string('address_line_2', 255)->nullable();
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('zip_code', 255);
            $table->string('country', 255);
            $table->string('date', 255);
            $table->string('time', 255);
            $table->string('description');
            $table->string('video_file_name')->nullable();
            $table->string('audio_file_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruning_requests');
    }
};
