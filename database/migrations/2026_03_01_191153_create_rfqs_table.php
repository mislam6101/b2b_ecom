<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->nullable()->constrained('buyers')->onDelete('set null');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // new
            $table->string('product_name');
            $table->integer('quantity');
            $table->decimal('target_price', 12, 2)->nullable();
            $table->date('delivery_date')->nullable();
            $table->text('message')->nullable();
            $table->json('extras')->nullable(); // for checkboxes: samples, cert, etc.
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('rfqs');
    }
};