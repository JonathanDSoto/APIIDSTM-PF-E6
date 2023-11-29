<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriesController extends Controller
{
    //
    public function allCategories(){
        return Inertia::render('Categories');
    }

    public function modifyInformation($id){
        $flag = true;
        return Inertia::render('CategoryModifyInformation',['categoryId' => $id,'flag'=> $flag]);
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
