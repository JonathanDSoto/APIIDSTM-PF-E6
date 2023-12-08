<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductInventory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/products.json');
        $products = json_decode($json);

        foreach ($products as $key => $value) {
            $product =  new Product([
                'name' => $value->name,
                'type' => $value->type,
                'sku' => $value->sku,
                'description' => $value->description,
                'price' => $value->price,
            ]);

            $brand = Brand::where('name', $value->brand->name)->first();
            if ($brand) {
                $product->brand()->associate($brand);
            } else {
                $brand = Brand::create([
                    'name' => $value->brand->name,
                    'logo_file_name' => $value->brand->logo_file_name,
                    'website' => $value->brand->website,
                ]);
                $product->brand()->associate($brand);
            }

            $product->save();

            if (isset($value->categories)) {
                foreach ($value->categories as $json_category) {
                    $category = Category::where('name', $json_category->name)->first();
                    if ($category) {
                        $product->categories()->attach($category->id);
                    } else {
                        $category = new Category([
                            'name' => $json_category->name,
                        ]);
                        $category->save();
                        $category->products()->attach($product->id);
                        $product->categories()->attach($category->id);
                    }
                }
            }

            if (isset($value->images)) {
                foreach ($value->images as $json_image) {
                    $product->images()->create([
                        'file_name' => $json_image->file_name,
                    ]);
                }
            }

            if (isset($value->inventories)) {
                foreach ($value->inventories as $json_inventory) {
                    $product->inventories()->create([
                        'size' => $json_inventory->size,
                        'stock' => $json_inventory->stock,
                    ]);
                }
            }
        }
    }
}
