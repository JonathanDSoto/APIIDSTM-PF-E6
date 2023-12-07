<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/coupons.json');
        $coupons = json_decode($json);

        foreach ($coupons as $key => $value) {
            Coupon::create([
                'code' => $value->code,
                'discount' => $value->discount,
                'start_date' => $value->start_date,
                'end_date' => $value->end_date,
                'is_active' => $value->is_active,
                'uses' => $value->uses,
                'max_uses' => $value->max_uses,
                'description' => $value->description ?? '',
            ]);
        }
    }
}
