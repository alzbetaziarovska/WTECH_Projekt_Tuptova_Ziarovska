<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primárny kľúč
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Cudzí kľúč na users.id

            $table->enum('state', ['pending', 'delivered', 'cancelled'])->default('pending');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('phone_num');
            $table->string('street');
            $table->string('house_num');
            $table->string('city');
            $table->string('zip_code');
            $table->string('country');
            $table->enum('payment', ['card', 'on_delivery', 'bank_transfer'])->default('card');
            $table->string('card_num')->nullable(); // Voliteľné číslo karty, ak je platba kartou
            $table->string('card_expiry')->nullable(); // Voliteľný dátum expirácie karty
            $table->string('cvc')->nullable(); // Voliteľný CVC kód karty
            $table->enum('shipment', ['courier', 'pickup', 'postal_service'])->default('courier');
            $table->enum('store', ['BA', 'PO', 'NR'])->nullable(); // Voliteľná predajňa, ak je vybrané osobná vyzdvihnutie
            $table->text('notes')->nullable(); // Voliteľné poznámky

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
