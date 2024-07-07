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
        Schema::create('project__collaborators', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('collaborator_id')->nullable();

            $table->unsignedBigInteger('project_id')
                ->references('id')
                ->on('projects')->onDelete('cascade');

            $table->unsignedBigInteger('collaborator_id')
                ->references('id')
                ->on('collaborators')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project__collaborators');
    }
};
