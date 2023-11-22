<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriesController extends Controller
{
    //
    public function allCategories(){
        $placeHolderArray = [
            [1,'Suavitel','11/20/2023',44,'$1,230'],
            [2,'Cloro','11/24/2023',302,'$44,300'],
            [3,'Lego Batman','11/12/2023',10,'$1,201'],
            [4,'Balon de Voleyball','11/04/2023',10,'$1,201'],
            [5,'Basquetball','11/01/2023',10,'$1,201'],
            [6,'Rodillera','11/29/2023',10,'$1,201'],
            
        ];
        return Inertia::render('Categories',[
            'products' => $placeHolderArray,
        ]);
    }

    public function modifyInformation(){
        $placeHolderArray = [ 1,'Suavitel','11/20/2023',44,'$1,230',];
        $flag = true;
        return Inertia::render('CategoryModifyInformation',[
            'products' => $placeHolderArray,
            'flag' => $flag,
        ]);
    }

    public function createCategory(){
        $placeHolderArray = [];
        $flag = false;
        return Inertia::render('CategoryModifyInformation',[
            'products' => $placeHolderArray,
            'flag' => $flag,
        ]);
    }
}
