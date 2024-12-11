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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id(); // Auto-incrementing unsigned big integer for the primary key
            $table->string('name'); // Supplier name
            $table->string('contact_name')->nullable(); // Contact person's name
            $table->string('phone')->nullable(); // Contact phone number
            $table->string('email')->nullable(); // Contact email
            $table->text('address')->nullable(); // Supplier's address
            $table->string('website')->nullable(); // Supplier's website
            $table->timestamps(); // Laravel's created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
