<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/customers.json');
        $customers = json_decode($json);

        foreach ($customers as $key => $value) {
            $customer = \App\Models\Customer::create([
                'name' => $value->name,
                'last_name' => $value->last_name,
                'password' => Hash::make($value->password),
                'email' => $value->email,
                'phone_number' => $value->phone_number,
                'country' => $value->country,
                'state' => $value->state,
                'city' => $value->city,
                'zip_code' => $value->zip_code,
                'address_line_1' => $value->address_line_1,
                'address_line_2' => $value->address_line_2,
                'address_line_3' => $value->address_line_3,
                'profile_photo_file_name' => $value->profile_photo_file_name ?? null,
            ]);
        }
    }
}
