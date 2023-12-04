<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_file_name',
    ];

    public function emails(): BelongsToMany
    {
        return $this->belongsToMany(Email::class)->withTimestamps();
    }
}
