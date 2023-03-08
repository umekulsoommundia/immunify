<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{





    function login(){
        return view ('admin.login');
    }



    function loginPostfun(request $request){
  
    $name =$request->name;
     $email =$request->email;
     $password =$request->password;
     $login = DB::table("admin_modes")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     $loginPass = DB::table("admin_modes")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('admin.profile');

     }
     else{
        return redirect()->back()->with("message","Invalid Credentials");
     }

    }

    function register(request $request){
     return view ('admin.register');
     
   
       }


    function userRegister(request $request){
       
     //   $request->validate([
       //     'email' => 'required|email|unique:admin_modes',
         //   'password'=>'required|min:8',
          
        // ]);

        $request->validate([
       
          'email' => 'required|email|unique:admin_modes',
  
          'password' => 'required|min:8',
      ]);

     

        $u = new adminMode();
        $u->email = $request->email;
        $u->password = $request->password;
        $u->save();
     

        return redirect()->back()->with("message","User Added");
     
   
       }


       function addProduct(){
         return view ("admin.addProduct");
       }
       
 
       function logout()
       {
           session()->forget('email','password');
           
           return view("admin.login");
       }




}