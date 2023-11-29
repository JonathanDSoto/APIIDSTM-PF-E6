<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersDataController extends Controller
{
    //
    public function allUsers(){
        return Inertia::render('Users');
    }
    
    public function detailedInformation($id){
        return Inertia::render('DetailedInformation',[
            'userId'=> $id,
        ]);
    }


    public function createUser(){
        $flag = false;
        return Inertia::render('UserModifyInformation',[
            'flag' => $flag,
        ]);
    }
    
    
    // public function handleCreateUser(Request $request)
    // {
    //     // Validar los datos del formulario
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users|max:255',
            
    //     ]);

    //     // Si la validación falla, redirigir de nuevo al formulario con errores
    //     if ($validator->fails()) {
    //         return redirect('/users/create-user')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     // Lógica para crear el usuario en la base de datos
    //     $user = new User();
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
        
    //     $user->save();

    //     // Después de crear el usuario, puedes redirigir a una página de éxito o a donde lo desees.
    //     return redirect('/users')->with('success', 'Usuario creado exitosamente.');
    // }

    


    public function modifyInformation($id){
        $flag = true;
        return Inertia::render('UserModifyInformation',[
            'flag' => $flag,
            'id' => $id
        ]);
    }

    public function deleteInformation($id){
        /* Delete user from the database */
        return Inertia::render('Index',[]);       
    }
}