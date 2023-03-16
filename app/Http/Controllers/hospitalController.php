<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Models\hospitalImages;
use App\Models\addedHospital;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;

class hospitalController extends Controller
{
   

    function hospitalSignin(){
        return view ('hospital.hospitalSignin');
    }



    function hospitalSigninPostFunc(request $request){
  
   
     $email = $request->email;
     $password = $request->password;

     $login = DB::table("added_hospitals")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("added_hospitals")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('hospital.hospitalOverview');

     }
     else{
        return redirect()->back()->with("message","Invalid Credentials");
     }

    }

    
    function hospitalLogout()
    {
        session()->forget('email','password');
        
        return view("admin.signin");
    }

}
