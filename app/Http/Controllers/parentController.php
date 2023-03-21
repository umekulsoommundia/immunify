<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userParents;
use App\Models\addedHospital;
use App\Models\appointmentRequest;
use App\Models\booking;
use App\Models\vaccinated;
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

     $login = DB::table("user_parents")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     $loginId = DB::table("user_parents")->select('id')->where(['email'=>$email,'password'=>$password])->first();
     $loginPass = DB::table("user_parents")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password,'id'=> $loginId->id]);
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
       

   $request->validate([
        'name' => 'required',
       'email' => 'required|email|unique:user_parents',
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password',
        'location' => 'required',
        'contactNumber' => 'required',
       
        'city' => 'required',
      
        'parentImage' => 'required',
    ]);

    $p = new userParents(); 
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

    function adminParent(){
        $parents = userParents::all();
         return view('admin.parents',compact('parents'));
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
        $r->parentId = $request->parentId;
        $r->hospitalId = $request->hospitalId;

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


        $Req = DB::table('user_parents')
        ->join('appointment_requests', 'user_parents.id', '=', 'appointment_requests.parentId')
        ->join('added_hospitals', 'added_hospitals.id', '=', 'appointment_requests.hospitalId')
        ->select('appointment_requests.*', 'user_parents.*', 'added_hospitals.name as hospital_name', 'user_parents.name as parent_name','appointment_requests.id as req_id')
        ->get();

return view('admin.appointmentRequest', compact('Req'));


    }



       
         
       
         function parentRequestdelete($id)
         {
             $r = appointmentRequest::find($id);
             $r->delete();
             return redirect()->back()->with("msg","Hospital cancelled");
         }
       
       
       
       
       
         function parentRequestaccept($id,request $request)
         {

             $b = appointmentRequest::find($id);
         
             $addedbooking = new booking();
             $addedbooking->fname = $b->fname;
             $addedbooking->lname = $b->lname;
             $addedbooking->dob = $b->dob;
             $addedbooking->age = $b->age;
             $addedbooking->weight = $b->weight;
             $addedbooking->medicalIssue = $b->medicalIssue; 
             $addedbooking->date = $b->date;
             $addedbooking->Timing = $b->Timing;
             $addedbooking->vaccineType = $b->vaccineType;
             $addedbooking->childImage = $b->childImage;
             $addedbooking->parentId = $b->parentId;
             $addedbooking->hospitalId = $b->hospitalId;
      
             $addedbooking->save();
       
             $b->delete();
         
         
             return redirect()->back()->with("msg", "Hospital added ");
         }
       
         function bookingAdded(){
         $book = DB::table('user_parents')
            ->join('bookings', 'user_parents.id', '=', 'bookings.parentId')
            ->join('added_hospitals', 'added_hospitals.id', '=', 'bookings.hospitalId')
            ->select('bookings.*', 'user_parents.*', 'added_hospitals.name as hospital_name', 'user_parents.name as parent_name','bookings.id as book_id')
            ->get();
    
      
            return view('admin.bookingAdded',compact('book'));
        }
       
        function vaccinated(){
            $vaccinated = DB::table('user_parents')
               ->join('vaccinateds', 'user_parents.id', '=', 'vaccinateds.parentId')
               ->join('added_hospitals', 'added_hospitals.id', '=', 'vaccinateds.hospitalId')
               ->select('vaccinateds.*', 'user_parents.*', 'added_hospitals.name as hospital_name', 'user_parents.name as parent_name','vaccinateds.id as book_id')
               ->get();
       
         
               return view('admin.vaccinated',compact('vaccinated'));
           }
           function vaccinatedH(){
            $vaccinated = DB::table('user_parents')
               ->join('vaccinateds', 'user_parents.id', '=', 'vaccinateds.parentId')
               ->join('added_hospitals', 'added_hospitals.id', '=', 'vaccinateds.hospitalId')
               ->select('vaccinateds.*', 'user_parents.*', 'added_hospitals.name as hospital_name', 'user_parents.name as parent_name','vaccinateds.id as book_id')
               ->get();
       
         
               return view('hospital.vaccinatedHistory',compact('vaccinated'));
           }
       
       
            function bookingAddedPOST()
            {
                return view("hospital.vaccine");
            }
          
       
       
        //     function bookingedit($id)
        //    {
        //        $b = booking::find($id);
       
       
        //        if (!$b) {
        //          abort(404, 'booking not found');
        //      }
         
        //      return view('admin.updatebooking',compact('b'));
        //    }
           
        //    function bookingupdate(Request $request,$id)
        //    {
        //        $r = booking::find($id);
        //        $r->fname = $request->fname;
        //        $r->lname = $request->lname;
        //        $r->dob = $request->dob;
        //        $r->age = $request->age;
        //        $r->weight = $request->weight;
        //        $r->medicalIssue = $request->medicalIssue;
        //        $r->date = $request->date;
        //        $r->Timing = $request->Timing;
        //        $r->vaccineType = $request->vaccineType;
        //        $imageFile2= $request->file("childImage");
        //        $image2= time().".".$imageFile2->getClientOriginalName();
        //        $imageFile2->move("./childImages",$image2);
        //        $r->childImage=$image2;
        //        $r->update();
        //        return redirect('booking')->with("msg", "Hospital updated ");
              
        //    }
       
       
           function bookingDelete(Request $request,$id)
           {

         
            $b = booking::find($id);
         
            $addedbooking = new vaccinated();
            $addedbooking->fname = $b->fname;
            $addedbooking->lname = $b->lname;
            $addedbooking->dob = $b->dob;
            $addedbooking->age = $b->age;
            $addedbooking->weight = $b->weight;
            $addedbooking->medicalIssue = $b->medicalIssue; 
            $addedbooking->date = $b->date;
            $addedbooking->Timing = $b->Timing;
            $addedbooking->vaccineType = $b->vaccineType;
            $addedbooking->childImage = $b->childImage;
            $addedbooking->parentId = $b->parentId;
            $addedbooking->hospitalId = $b->hospitalId;
     
            $addedbooking->save();
      
            $b->delete();
        
        
            return redirect()->back()->with("msg", "vaccinated ");

       
           }

        //    function acceptRequest($id) {
        //     // Retrieve the appointment request with the given ID
        //     $request = appointmentRequest::findOrFail($id);
          
        //     // Create a new booking based on the request data
        //     $booking = new booking;
        //     $booking->fname = $request->fname;
        //     $booking->lname = $request->lname;
        //     $booking->dob = $request->dob;
        //     $booking->age = $request->age;
        //     $booking->weight = $request->weight;
        //     $booking->medicalIssue = $request->medicalIssue;
        //     $booking->date = $request->date;
        //     $booking->Timing = $request->Timing;
        //     $booking->vaccineType = $request->vaccineType;
        //     $booking->childImage = $request->childImage;
        //     $booking->parentId = $request->parentId;
        //     $booking->hospitalId = $request->hospitalId;
            
        //     // Save the booking to the database
        //     $booking->save();
          
        //     // Delete the request from the database
        //     $request->delete();
          
        //     // Redirect back to the page with a success message
        //     return redirect()->back()->with("msg", "Booking added.");
        //   }
        function loginForm()
        {
            return view("immunify.loginForm");
        }
      
        
          
}
