<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount',
        'is_active',
        'max_uses',
        'uses',
        'start_date',
        'end_date'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->created_by = Auth::id();
        });

        self::updating(function ($model) {
            $model->updated_by = Auth::id();
        });
    }

    public function create_author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function update_author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
