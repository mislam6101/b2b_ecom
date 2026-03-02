<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Relationships
            $table->foreignId('product_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('buyer_id')
                ->constrained('buyers')
                ->onDelete('cascade');

            $table->foreignId('seller_id')->constrained('sellers')->onDelete('cascade');

            // Order Info
            $table->string('company')->nullable();
            $table->integer('quantity');
            $table->decimal('unit_price', 12, 2);
            $table->decimal('total_amount', 12, 2);

            // Delivery Info
            $table->text('delivery_address');
            $table->text('special_instructions')->nullable();

            // Status Control (B2B এর জন্য important)
            $table->enum('status', [
                'pending',
                'approved',
                'processing',
                'shipped',
                'completed',
                'cancelled'
            ])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
