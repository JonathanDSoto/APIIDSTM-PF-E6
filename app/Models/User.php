<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function created_brands(): HasMany
    {
        return $this->hasMany(Brand::class, 'created_by');
    }

    public function updated_brands(): HasMany
    {
        return $this->hasMany(Brand::class, 'updated_by');
    }

    public function created_products(): HasMany
    {
        return $this->hasMany(Product::class, 'created_by');
    }

    public function updated_products(): HasMany
    {
        return $this->hasMany(Product::class, 'updated_by');
    }

    public function created_categories(): HasMany
    {
        return $this->hasMany(Category::class, 'created_by');
    }

    public function updated_categories(): HasMany
    {
        return $this->hasMany(Category::class, 'updated_by');
    }

    public function created_shipping_companies(): HasMany
    {
        return $this->hasMany(ShippingCompany::class, 'created_by');
    }

    public function updated_shipping_companies(): HasMany
    {
        return $this->hasMany(ShippingCompany::class, 'updated_by');
    }

    public function created_customers(): HasMany
    {
        return $this->hasMany(Customer::class, 'created_by');
    }

    public function updated_customers(): HasMany
    {
        return $this->hasMany(Customer::class, 'updated_by');
    }
}
