<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Models\hospitalImages;
use App\Models\vaccine;
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

     $loginID = DB::table("added_hospitals")->select('id')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("added_hospitals")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass && $loginID){
         session(['email'=>$login->email,'password'=>$loginPass->password,'id'=>$loginID->id ]);
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


    function addVaccineFunc(request $request){ 
       
        $request->validate([
          'vaccineType' => 'required',
          'VaccineQuantity' => 'required',
   
   ]);
   $v = new vaccine();
   $v->vaccineType = $request->vaccineType;
   $v->VaccineQuantity = $request->VaccineQuantity;
   $v->hospitalId = $request->hospitalId;
   

        $v->save();
     

        return redirect()->back()->with("message","vaccine added");
     
   
       }

       function vaccinesFetch(){
     $vaccination = DB::table('vaccines')->where('hospitalId', '=', session('id'))->get();
         return view('hospital.vaccines',compact('vaccination'),['vaccines'=>$vaccination]);
        }


        function patientsFetch(){
        $book = DB::table('user_parents')
        ->join('bookings', 'user_parents.id', '=', 'bookings.parentId')
        ->join('added_hospitals', 'added_hospitals.id', '=', 'bookings.hospitalId')
        ->select('bookings.*', 'user_parents.*', 'added_hospitals.name as hospital_name', 'user_parents.name as parent_name','bookings.id as book_id')->where('hospitalId', '=', session('id'))
        ->get();

  
        return view('hospital.patients',compact('book'));
    }
}