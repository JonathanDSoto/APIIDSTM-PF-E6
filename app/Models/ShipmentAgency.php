<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentAgency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'phone',
        'email',
    ];
}
