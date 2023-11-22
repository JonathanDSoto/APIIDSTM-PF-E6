<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CouponsController extends Controller
{
    //
    public function allCoupons(){
        /* ID, CODE, START-DATE, FINISH-DATE, AMOUNT, TIMES-USED, DISCOUNT */
        $placeHolderArray = [
            [1,'SuperMAY2023','11/20/2023','11/30/2023',100,22,'$100'],
            [2,'2023OPENSOURCE','11/01/2023','11/19/2023',200,130,'$50'],
            [3,'DONTSPOILME!','11/04/2023','11/23/2023',40,39,'$120']
        ];
        return Inertia::render('Coupons',[
            'coupons' => $placeHolderArray,
        ]);
    }
    public function modifyInformation($id){
        $placeHolderItem = ['1','SuperMAY2023', '11/20/2023','11/30/2023',100,22,'$100'];
        $flag = true;
        return Inertia::render('CouponsModifyInformation',[
            'coupons' => $placeHolderItem,
            'flag' => $flag,
        ]);
    }
    public function createCoupon(){
        $placeHolderItem = [];
        $flag = false;
        return Inertia::render('CouponsModifyInformation',[
            'coupons' => $placeHolderItem,
            'flag' => $flag,
        ]);
    }
    public function deleteInformation(){

        return Inertia::render('Index',[]);
    }
}
