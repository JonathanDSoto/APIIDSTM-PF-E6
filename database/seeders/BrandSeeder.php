<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/brands.json');
        $brands = json_decode($json);

        foreach ($brands as $key => $value) {
            $brand = Brand::create([
                'name' => $value->name,
                'logo_file_name' => $value->logo_file_name ?? '',
            ]);

            if (isset($value->emails)) {
                foreach ($value->emails as $email) {
                    $brand->emails()->create([
                        'email' => $email,
                    ]);
                }
            }

            if (isset($value->phone_numbers)) {
                foreach ($value->phone_numbers as $phone_number) {
                    $brand->phone_numbers()->create([
                        'phone_number' => $phone_number,
                    ]);
                }
            }

            if (isset($value->websites)) {
                foreach ($value->websites as $website) {
                    $brand->websites()->create([
                        'website' => $website,
                    ]);
                }
            }
        }
    }
}
