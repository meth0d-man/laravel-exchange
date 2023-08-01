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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('currency_name');
            $table->decimal('exchange_rate');
            $table->string('foreign_currency_purchased');
            $table->decimal('exchange_rate_for_foreign_currency');
            $table->decimal('surcharge_percentage');
            $table->decimal('amount_of_foreign_currency_purchased');
            $table->decimal('amount_paid_in_USD');
            $table->decimal('discount_percentage');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
