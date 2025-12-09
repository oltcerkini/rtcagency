<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            
            // Remove foreign key constraint temporarily or make it nullable without constraint
            // $table->foreignId('project_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('project_id')->nullable(); // Changed this
            
            // $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('assigned_to')->nullable(); // Changed this
            
            $table->enum('status', ['todo', 'in_progress', 'review', 'done'])->default('todo');
            $table->integer('priority')->default(1);
            $table->date('due_date')->nullable();
            $table->integer('sort_order')->default(0);
            $table->json('labels')->nullable();
            $table->json('attachments')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};