<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primárny kľúč

            $table->unsignedBigInteger('category_id'); // FK na categories
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('maker')->nullable(); // napr. AllForBees, Včelári.sk...
            $table->decimal('price', 8, 2)->default(0.00); // predpokladaná cena
            $table->decimal('stars', 2, 1)->default(0); // napr. 4.5
            $table->integer('in_storage')->default(0);
            $table->boolean('new_in')->default(false);
            $table->boolean('recommend')->default(false);
            $table->boolean('favorite')->default(false);
            $table->decimal('sale', 3, 2)->default(0); // napr. 0.20 pre 20 % zľavu

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            // timestamps (iba ak ich neskôr plánuješ použiť)
            // $table->timestamps(); ← zatiaľ vynechané, model má timestamps = false
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
