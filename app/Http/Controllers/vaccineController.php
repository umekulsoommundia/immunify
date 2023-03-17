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

class vaccineController extends Controller
{
  
    function edit($id)
    {
        $vaccination = vaccine::find($id);


        if (!$vaccination) {
          abort(404, 'vaccine not found');
      }
  
      return view('hospital.updateVaccine',compact('vaccination'));
    }
    



    function update(Request $request,$id)
    {
      

        $v = vaccine::find($id);
        $v->vaccineType = $request->vaccineType;
        $v->VaccineQuantity = $request->VaccineQuantity; 
        $v->update();

        return redirect('/hospitalVaccines')->with("msg","vaccine updated");
    }


    function delete($id)
  {
      $v = vaccine::find($id);
      $v->delete();
      return redirect()->back()->with("msg","vaccine deleted");
  }

   
  function hospitalVaccinesPOST()
  {
      return view("hospital.vaccine");
  }

}
