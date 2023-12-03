<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_number',
        'status',
        'shipment_agency_id',
        'sent_date',
        'estimated_delivery_date',
        'actual_delivery_date',
        'shipment_cost',
        'shipment_tax',
        'shipment_discount',
        'shipment_total',
        'shipment_notes',
    ];
}
