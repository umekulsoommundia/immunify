<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parent;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;

class parentController extends Controller
{
   
    function parentSignin(){
        return view ('parents.parentSignin');
    }



    function parentSigninPostFunc(request $request){
  
   
     $email = $request->email;
     $password = $request->password;

     $login = DB::table("parents")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("parents")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('parents.parentOverview');

     }
     else{
        return redirect()->back()->with("message","Invalid Credentials");
     }

    }

    
    function parentLogout()
    {
        session()->forget('email','password');
        
        return view("admin.signin");
    }

    function parentSignup(){
        return view ("parents.parentSignup");
      }

    
function parentSignupFunc(request $request){
       

    // $request->validate([
    //     'name' => 'required',
    //     'email' => 'required|email|unique:admins',
    //     'password' => 'required|min:8',
    //     'confirmPassword' => 'required|same:password',
    //     'location' => 'required',
    //     'contactNumber' => 'required',
    //     'certificate' => 'required',
    //     'city' => 'required',
    //     'Timing' => 'required',
    //     'hospitalImages' => 'required',
    // ]);
    $p = new parent();
    $p->name = $request->name;
    $p->email = $request->email;
    $p->password = $request->password;
    $p->location = $request->location;
    $p->contactNumber = $request->contactNumber;
    $p->city = $request->city;

    $imageFile= $request->file("parentImage");
    $image= time().".".$imageFile->getClientOriginalName();
    $imageFile->move("./parentImages",$image);
    $p->parentImage=$image;
    $p->save();
    
  
    // if ($request->hasFile('hospitalImages')) {
    //   $multiImage = $request->file('hospitalImages');
    //   foreach($multiImage as $multi ){
    //       $mulimg = time().".".$multi->getClientOriginalName();
    //       $multi->move("hospitalImages" , $mulimg);
    //       $m = new hospitalImages();
    //       $m->hospitalImages = $mulimg;
    //       $m->hospitalId=$h->id;
    //       $m->save();
    //     }
    // }
    
  
  
    return redirect()->back()->with("message","Request Sent");
}

}
