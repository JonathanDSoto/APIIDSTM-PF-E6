<?php

namespace Database\Seeders;

use App\Models\ShippingCompany;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ShippingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/shipping_companies.json');
        $shippingCompanies = json_decode($json);

        foreach ($shippingCompanies as $key => $value) {
            ShippingCompany::create([
                'name' => $value->name,
                'website' => $value->website,
                'phone' => $value->phone,
                'email' => $value->email,
            ]);
        }
    }
}
