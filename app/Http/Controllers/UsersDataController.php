<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersDataController extends Controller
{
    //
    public function detailedInformation($id){
        $placeHolderName = 'Juan Josue';
        $placeHolderAge = '96';
        $placeHolderLastName = 'Trejo Valenzuela';
        $placeHolderEmail = 'josuedab@hotmail.com';
        $placeHolderAddress = 'Biznaga 108 col. indeco';
        $placeHolderPhoneNumber = '6122938485';
        $placeHolderImage = '../../../public/images/users/user-1.jpg';
        $placeHolderTotalShipments = 44;
        $placeHolderCartItems = 23;
        $placeHolderWishlistItems = 1232;
        $placeHolderCreationDate = "12/10/2023";
        $placeHolderArray = [
            [1,'$12,320',['Melon Sandia', 'Chanclas de gala', 'Lego Harry Potter Set', 'American Eagle Boxer']],
            [2,'$23,232',['Pepino con Tajin','Sabritones','Papitas del Oxxo', 'Set original de Nagatoro']],
            [3,'$34,230',['Stickers Anime','Manga Full Metal Alchemist Coleccionista','FunkoPop de Tsunade']]
        ];
        $placeHolderArrayTwo = [
            [1,'$12,320','Credit'],
            [2,'$23,232','Debit'],
            [3,'$34,230','Credit']
        ];
        return Inertia::render('DetailedInformation',[
            'userId'=> $id,
            'userName' => $placeHolderName,
            'userAge' => $placeHolderAge,
            'userLastName' => $placeHolderLastName,
            'userEmail' => $placeHolderEmail,
            'userAddress' => $placeHolderAddress,
            'userPhoneNumber' => $placeHolderPhoneNumber,
            'userImage' => $placeHolderImage,
            'userTotalShipments' => $placeHolderTotalShipments,
            'userCartItems' => $placeHolderCartItems,
            'userWishlistItems' => $placeHolderWishlistItems,
            'userPurchases' => $placeHolderArray,
            'userPayment' => $placeHolderArrayTwo,
            'userCreationDate' => $placeHolderCreationDate,
        ]);
    }

    public function allUsers(){
        $placeHolderArray = [
            [1,'Rodrigo','11/20/2023',44,'$1,230'],
            [2,'Victor','11/13/2023',302,'$44,300'],
            [3,'Jorge','11/26/2023',10,'$1,201']
        ];
        return Inertia::render('Users',[
            'users' => $placeHolderArray,
        ]);
    }

    public function createUser(){
        $flag = false;
        return Inertia::render('UserModifyInformation',[
            'flag' => $flag,
        ]);
    }

    public function modifyInformation($id){
        $placeHolderName = 'Kenneth de Guadalupe';
        $placeHolderAge = '21';
        $placeHolderLastName = ' Quintero Valles';
        $placeHolderEmail = 'cned1999@hotmail.com';
        $placeHolderAddress = 'Loreto malecon 2. tercer cruce';
        $placeHolderPhoneNumber = '61228347459';
        $placeHolderImage = '../../../public/images/users/user-1.jpg';
        $placeHolderCreationDate = "12/10/2023";

        $flag = true;
        return Inertia::render('UserModifyInformation',[
            'userId'=> $id,
            'userName' => $placeHolderName,
            'userAge' => $placeHolderAge,
            'userLastName' => $placeHolderLastName,
            'userEmail' => $placeHolderEmail,
            'userAddress' => $placeHolderAddress,
            'userPhoneNumber' => $placeHolderPhoneNumber,
            'userImage' => $placeHolderImage,
            'userCreationDate' => $placeHolderCreationDate,
            'flag' => $flag,
        ]);
    }

    public function deleteInformation($id){
        /* Delete user from the database */
        return Inertia::render('Index',[]);       
    }
}