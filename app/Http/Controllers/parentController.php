<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parents;
use App\Models\addedHospital;
use App\Models\appointmentRequest;
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
    $p = new parents();
    $p->name = $request->name;
    $p->password = $request->password;
    $p->location = $request->location;
    $p->email = $request->email;
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
    
  
  
    return redirect('parentSignupGET')->with("message","User Registered");
}

function parentSignupFuncGET(){
    return view ("parents.parentSignup");
  }



function parentHospital(){
    $hospital = addedHospital::all();
     return view('parents.hospital',compact('hospital'));
    }

    function bookingVaccinePOSTFunc(request $request){
       

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



        $r= new appointmentRequest();
        $r->fname = $request->fname;
        $r->lname = $request->lname;
        $r->dob = $request->dob;
        $r->age = $request->age;
        $r->weight = $request->weight;
        $r->medicalIssue = $request->medicalIssue;
        $r->date = $request->date;
        $r->Timing = $request->Timing;
        $r->vaccineType = $request->vaccineType;


        $imageFile2= $request->file("childImage");
        $image2= time().".".$imageFile2->getClientOriginalName();
        $imageFile2->move("./childImages",$image2);
        $r->childImage=$image2;
        $r->save();
        
      
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













    function parentRequest(){
        $Req = appointmentRequest::all();
         return view('admin.requests',compact('Req'));}
       
         function parentRequestdelete($id)
         {
             $r = appointmentRequest::find($id);
             $r->delete();
             return redirect()->back()->with("msg","Hospital cancelled");
         }
       
       
       
       
       
         function parentRequestaccept($id,request $request)
         {
             $b = booking::find($id);
         
             $addedbooking = new addedHospital();
             $addedbooking->name = $b->name;
             $addedbooking->email = $b->email;
             $addedbooking->password = $b->password;
             $addedbooking->location = $b->location;
             $addedbooking->contactNumber = $b->contactNumber;
             $addedbooking->certificate = $b->certificate; 
             $addedbooking->city = $b->city;
             $addedbooking->hospitalImage = $b->hospitalImage;
             $addedbooking->save();
       
             $b->delete();
         
         
             return redirect()->back()->with("msg", "Hospital added ");
         }
       
         function bookingAdded(){
           $b = booking::all();
            return view('admin.booking',compact('b'));}
       
       
       
       
            function bookingAddedPOST()
            {
                return view("hospital.vaccine");
            }
          
       
       
       
       
       
            function bookingedit($id)
           {
               $b = booking::find($id);
       
       
               if (!$b) {
                 abort(404, 'booking not found');
             }
         
             return view('admin.updatebooking',compact('b'));
           }
           
           function bookingupdate(Request $request,$id)
           {
               $b = booking::find($id);
               $b->name = $request->name;
               $b->email = $request->email;
               $b->password = $request->password;
               $b->location = $request->location;
               $b->contactNumber = $request->contactNumber;
               $imageFile= $request->file("parentImage");
               $image= time().".".$imageFile->getClientOriginalName();
               $imageFile->move("parentImage",$image);
               $b->update();
               return redirect('booking')->with("msg", "Hospital updated ");
              
           }
       
       
           function bookingDelete(Request $request,$id)
           {
               $b = booking::find($id);
               $b->delete();
               return redirect()->back()->with("msg","Hospital deleted");
       
              
           }


}
