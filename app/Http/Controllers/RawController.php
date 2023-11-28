<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RawController extends Controller
{
    public function allRaw(){
        $placeHolderArray = [
            [1, 'Cotton Fabric', 50, '2023-11-15', '2024-11-15', 'CF12345'],
            [2, 'Glass Cleaner', 100, '2023-11-18', '2024-11-18', 'GC67890'],
            [3, 'Steel Rods', 75, '2023-11-10', '2024-11-10', 'SR54321'],
            [4, 'Rubber Balls', 200, '2023-11-05', '2024-11-05', 'RB24680'],
            [5, 'Plastic Baskets', 120, '2023-11-01', '2024-11-01', 'PB13579'],
            [6, 'Knee Braces', 30, '2023-11-25', '2024-11-25', 'KB97531'],
        ];
        
        return Inertia::render('Raw',[
            'products' => $placeHolderArray,
        ]);
    }

    public function createRaw(){
        $flag = false;
        $placeHolderArray = [];
        return Inertia::render('RawModifyInformation',[
            'flag' => $flag,
            'products' => $placeHolderArray,
        ]);
    }

    public function modifyInformation(){
        $placeHolderArray = [
            1,'Plastic','11/20/2023',22,'$1,230','23/23/23',
        ];
        $flag = true;
        return Inertia::render('RawModifyInformation',[
            'products' => $placeHolderArray,
            'flag' => $flag
        ]);
    }

    public function detailedInformation(){
        $placeHolderArray = [
            [1,'Suavitel','11/20/2023',44,'$1,230'],
        ];
        return Inertia::render('ProductDetailedInformation',[
            'products' => $placeHolderArray,
        ]);
    }
}
