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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            //idea_id
            //constrained = we can not create comments on ideas that don't exist
            //cascadeONDelete = delete the comment when the idea is deleted
            $table->foreignId('idea_id')->constrained()->cascadeOnDelete();
            // content
            $table->string('content');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
