<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'country',
        'state',
        'city',
        'zip_code',
        'address_line_1',
        'address_line_2',
        'address_line_3',
    ];

    protected $hidden = [
        'password',
    ];

    static public function boot()
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
