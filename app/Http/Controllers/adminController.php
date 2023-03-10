<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\hospital;
use App\Models\hospitalImages;
use App\Models\addedHospital;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{





    function signin(){
        return view ('admin.signin');
    }



    function signinPostFunc(request $request){
  
   
     $email = $request->email;
     $password = $request->password;

     $login = DB::table("admins")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("admins")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('admin.overview');

     }
     else{
        return redirect()->back()->with("message","Invalid Credentials");
     }

    }


    function signup(request $request){
     return view ('admin.signup');
       }




    function adminRegister(request $request){
       
        $request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:admins',
          'password' => 'required|min:8',
          'confirmPassword' => 'required|same:password',
   ]);

        $u = new admin();
        $u->username = $request->name;
        $u->email = $request->email;
        $u->password = $request->password;
        $u->save();
     

        return redirect()->back()->with("message","Admin Registered");
     
   
       }


       



 
       function logout()
       {
           session()->forget('email','password');
           
           return view("admin.signin");
       }

       function profile(){
        return view ("admin.profile");
      }
      function overview(){
        return view ("admin.overview");
      }

      function schedule(){
        return view ("admin.schedule");
      }
      function addhospital(){
        return view ("admin.addhospitals");
      }
      function hospital(){
        return view ("admin.hospital");
      }
      function vaccines(){
        return view ("admin.vaccines");
      }
      function parents(){
        return view ("admin.parents");
      }
      function child(){
        return view ("admin.child");
      }

      function hospitalSignup(){
        return view ("hospital.hospitalSignup");
      }

function hospitalSignupFunc(request $request){
       

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
        $h = new hospital();
        $h->name = $request->name;
        $h->email = $request->email;
        $h->password = $request->password;
        $h->location = $request->location;
        $h->contactNumber = $request->contactNumber;

        $imageFile= $request->file("certificate");
        $image= time().".".$imageFile->getClientOriginalName();
        $imageFile->move("./certificate",$image);
        $h->certificate=$image;

        $h->city = $request->city;

        $imageFile2= $request->file("hospitalImage");
        $image2= time().".".$imageFile2->getClientOriginalName();
        $imageFile2->move("./hospitalImages",$image2);
        $h->hospitalImage=$image2;
        $h->save();
        
      
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




function hospitalRequest(){
 $hospitalReq = hospital::all();
  return view('admin.addhospitals',compact('hospitalReq'));}

  function delete($id)
  {
      $h = hospital::find($id);
      $h->delete();
      return redirect()->back()->with("msg","Hospital cancelled");
  }

  function accept($id,request $request)
  {
      $h = hospital::find($id);
  
      $addedHospital = new addedHospital();
      $addedHospital->name = $h->name;
      $addedHospital->email = $h->email;
      $addedHospital->password = $h->password;
      $addedHospital->location = $h->location;
      $addedHospital->contactNumber = $h->contactNumber;
      $addedHospital->certificate = $h->certificate; 
      $addedHospital->city = $h->city;
      $addedHospital->hospitalImage = $h->hospitalImage;
      $addedHospital->save();

      $h->delete();
  
  
      return redirect()->back()->with("msg", "Hospital added ");
  }

  function hospitalAdded(){
    $hospital = addedHospital::all();
     return view('admin.hospital',compact('hospital'));}



     function edit($id)
    {
        $hospital = addedHospital::find($id);

        return view('admin.updateHospital',compact('hospital'));
    }
    function update(Request $request,$id)
    {
        $hospital = addedHospital::find($id);
        $h->name = $request->name;
        $h->email = $request->email;
        $h->password = $request->password;
        $h->location = $request->location;
        $h->contactNumber = $request->contactNumber;
        $imageFile= $request->file("certificate");
        $image= time().".".$imageFile->getClientOriginalName();
        $imageFile->move("certificate",$image);
        $h->certificate=$image;
        $imageFile= $request->file("hospitalImage");
        $image= time().".".$imageFile->getClientOriginalName();
        $imageFile->move("hospitalImages",$image);
        $h->save();

        return redirect('admin.hospital')->with("msg","Hospital updated");
    }


}