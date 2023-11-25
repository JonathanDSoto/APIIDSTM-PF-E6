<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    //
    function loadIndex(){

        return Inertia::render('Index',[

        ]);
    }
}
