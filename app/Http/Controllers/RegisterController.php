<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class RegisterController extends Controller
{
    public function formRegistrasi(){
        return view('register.register',[
            'title'=>'Register'
        ]);
    }

    public function registrasi(Request $request){

        try {

            $validatedData = $request->validate([
                'name' => 'required|max:50|min:5',
                'username' =>'required|max:30|min:5',
                'email' => 'required|email:dns',
                'password' => 'required|min:4|max:20'
            ]);
    
            User::create($validatedData);
            
            return redirect( route('login') )->with('success','Registrasi berhasil!!');
            
        }

        catch (Exception $e){
            return redirect(route('registrasi'))->with('loginError' ,$e->getMessage())->withInput();
        }

        
    }
}
