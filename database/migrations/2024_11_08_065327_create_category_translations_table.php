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
        Schema::create('category_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); 
            $table->foreignId('language_id')->constrained('site_languages')->onDelete('cascade'); 
            $table->string('name');  
            $table->string('slug')->unique();      
        
            $table->text('description')->nullable(); 
            $table->timestamps();
            
            // Ensure unique translation per category per language
            $table->unique(['category_id', 'language_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_translations');
    }
};
