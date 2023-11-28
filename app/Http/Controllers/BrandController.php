<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BrandController extends Controller
{
    //
    public function allBrand(){
        $placeHolderArray = [
            [1, 'Nike', 'https://www.nike.com', 'https://www.nike-example.com', '123-456-7890', '987-654-3210', 'info@nike.com', 'https://www.example.com/nike-logo.png', 'NK12345'],
            [2, 'Adidas', 'https://www.adidas.com', 'https://www.adidas-example.com', '111-222-3333', '444-555-6666', 'info@adidas.com', 'https://www.example.com/adidas-logo.png', 'AD67890'],
            [3, 'Puma', 'https://www.puma.com', 'https://www.puma-example.com', '777-888-9999', '000-999-8888', 'info@puma.com', 'https://www.example.com/puma-logo.png', 'PM54321'],
            [4, 'Reebok', 'https://www.reebok.com', 'https://www.reebok-example.com', '333-444-5555', '666-777-8888', 'info@reebok.com', 'https://www.example.com/reebok-logo.png', 'RB24680'],
            [5, 'Under Armour', 'https://www.underarmour.com', 'https://www.underarmour-example.com', '999-888-7777', '555-444-3333', 'info@underarmour.com', 'https://www.example.com/underarmour-logo.png', 'UA13579'],
            [6, 'New Balance', 'https://www.newbalance.com', 'https://www.newbalance-example.com', '222-333-4444', '888-999-0000', 'info@newbalance.com', 'https://www.example.com/newbalance-logo.png', 'NB97531'],
        ];
        
        return Inertia::render('Brands',[
            'products' => $placeHolderArray,
        ]);
    }

    public function createBrand(){
        $flag = false;
        $placeHolderArray = [];
        return Inertia::render('BrandModifyInformation',[
            'flag' => $flag,
            'products' => $placeHolderArray,
        ]);
    }

    public function modifyInformation(){
        $placeHolderArray = [
            1,'Plastic','11/20/2023',22,'$1,230','23/23/23',
        ];
        $flag = true;
        return Inertia::render('BrandModifyInformation',[
            'products' => $placeHolderArray,
            'flag' => $flag
        ]);
    }

    public function detailedInformation(){
        $placeHolderArray = [
            [1,'Suavitel','11/20/2023',44,'$1,230'],
        ];
        return Inertia::render('BrandDetailedInformation',[
            'products' => $placeHolderArray,
        ]);
    }
}
