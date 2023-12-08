<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class ShippingCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'phone',
        'email',
    ];

    public static function boot(): void
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
