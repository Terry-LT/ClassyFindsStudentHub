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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id');
            $table->foreignId('country_id');
            $table->foreignId('city_id')->nullable();
            $table->foreignId('university_id')->nullable();
            $table->string('title',250);
            $table->text('body');
            $table->string('tags',250)->nullable();
            $table->integer('price')->nullable();
            $table->foreignId('currency_id');
            $table->boolean('sold')->default(false);
            $table->text('contact_me_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
