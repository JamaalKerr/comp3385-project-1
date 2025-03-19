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
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // Auto-incrementing unique ID
            $table->string('title'); // Title of the property
            $table->integer('bedrooms'); // Number of bedrooms
            $table->integer('bathrooms'); // Number of bathrooms
            $table->string('location'); // Location of the property
            $table->decimal('price', 10, 2); // Price of the property (up to 10 digits, 2 decimal places)
            $table->string('property_type'); // Property type (House or Apartment)
            $table->text('description'); // Short description
            $table->string('photo')->nullable(); // Photo filename (nullable in case no photo is uploaded)
            $table->timestamps(); // Created_at & Updated_at timestamps
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
