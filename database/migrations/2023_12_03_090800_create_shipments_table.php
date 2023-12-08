<?php

use App\Models\ShippingCompany;
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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tracking_number');
            $table->enum('status', ['pending', 'sent', 'delivered', 'returned', 'cancelled']);
            $table->foreignIdFor(ShippingCompany::class)->constrained();
            $table->date('sent_date');
            $table->date('estimated_delivery_date');
            $table->date('actual_delivery_date');
            $table->string('shipment_cost');
            $table->string('shipment_tax');
            $table->string('shipment_discount');
            $table->string('shipment_total');
            $table->string('shipment_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
