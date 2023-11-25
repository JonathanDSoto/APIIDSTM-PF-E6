<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductsController extends Controller
{
    //
    public function allProducts(){
        $placeHolderArray = [
            [1,'Suavitel','11/20/2023',44,'$1,230','ABC1234'],
            [2,'Cloro','11/24/2023',302,'$44,300','ABC1234'],
            [3,'Lego Batman','11/12/2023',10,'$1,201','ABC1234'],
            [4,'Balon de Voleyball','11/04/2023',10,'$1,201','ABC1234'],
            [5,'Basquetball','11/01/2023',10,'$1,201','ABC1234'],
            [6,'Rodillera','11/29/2023',10,'$1,201','ABC1234'],
            
        ];
        return Inertia::render('Products',[
            'products' => $placeHolderArray,
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

    public function modifyInformation(){
        $placeHolderArray = [
            1,'Suavitel','11/20/2023',44,'$1,230','ABC123',
        ];
        $flag = true;
        return Inertia::render('ProductModifyInformation',[
            'products' => $placeHolderArray,
            'flag' => $flag
        ]);
    }

    public function createProduct(){
        $flag = false;
        $placeHolderArray = [];
        return Inertia::render('ProductModifyInformation',[
            'flag' => $flag,
            'products' => $placeHolderArray,
        ]);
    }

    public function deleteInformation($id){
        /* Delete user from the database */
        return Inertia::render('Index',[]);       
    }
}
