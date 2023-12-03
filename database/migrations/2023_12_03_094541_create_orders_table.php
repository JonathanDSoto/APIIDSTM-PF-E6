<?php

use App\Models\Coupon;
use App\Models\Customer;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Customer::class)->constrained();
            $table->char('order_number', 16)->unique();
            $table->decimal('total_price', 10, 2);
            $table->decimal('total_tax', 10, 2);
            $table->decimal('total_discount', 10, 2);
            $table->foreignIdFor(Coupon::class)->constrained()->nullable();
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'completed', 'returned', 'canceled', 'fraud', 'partial']);
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
