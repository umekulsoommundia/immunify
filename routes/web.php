<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\hospitalController;
use App\Http\Controllers\parentController;
use App\Http\Controllers\vaccineController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('layout', function () {
    return view('profile.layout');
});
Route::get('u', function () {
    return view('profile.u');
});
Route::get('dashboard', function () {
    return view('profile.dashboard');
});
Route::get('overview', function () {
    return view('admin.overview');
});
Route::get('profile', function () {
    return view('admin.profile');
});
Route::get('hospital', function () {
    return view('admin.hospital');
});

Route::get('setting', function () {
    return view('admin.setting');
});

Route::get('notification', function () {
    return view('admin.notifications');
});

Route::get('addHospital', function () {
    return view('admin.addhospitals');
});

// Route::get('vaccines', function () {
//     return view('admin.vaccines');
// });

Route::get('parents', function () {
    return view('admin.parents');
});
Route::get('child', function () {
    return view('admin.child');
});
Route::get('schedule', function () {
    return view('admin.schedule');
});

Route::get('signin', function () {
    return view('admin.signin');
});
Route::get('index', function () {
    return view('immunify.index');
});

Route::get('extra', function () {
    return view('immunify.extra');
});


Route::get('/addVaccine', function () {
    return view('hospital.addVaccine');
});






Route::POST('/addVaccineFunc',[hospitalController::class,'addVaccineFunc']);

Route::get('signup', function () {
    return view('admin.signup');
});

Route::get('/hospitalSignin',[hospitalController::class,'hospitalSignin']);

Route::post('/hospitalSigninPost',[hospitalController::class,'hospitalSigninPostFunc']);

route::get('/hospitalLogout',[hospitalController::class,'hospitalLogout']);

Route::get('/signin',[adminController::class,'signin']);

Route::post('/signinPost',[adminController::class,'signinPostFunc']);

Route::get('/signup',[adminController::class,'signup']);

route::post('/adminRegister',[adminController::class,'adminRegister']);

route::get('/logout',[adminController::class,'logout']);


route::get('delete/{id}',[adminController::class,'delete']);

route::get('edit/{id}',[adminController::class,'edit']);

route::post('update/{id}',[adminController::class,'update']);




route::get('deleteHospital/{id}',[adminController::class,'delete']);

//  Route::post('edit/edit', [adminController::class, 'update']);


route::get('accept/{id}',[adminController::class,'accept']);


Route::get('/hospitalSignup',[adminController::class,'hospitalSignup']);

route::post('/hospitalSignupPost',[adminController::class,'hospitalSignupFunc']);






//Route::group(['middleware'=> 'hospitalGuard'],function(){
    Route::get('/hospitalOverview', function () {
        return view('hospital.hospitalOverview');
    });
    Route::get('/hospitalProfile', function () {
        return view('hospital.profile');
    });
    Route::get('/hospitalAppointments', function () {
        return view('hospital.appointments');
    });
    route::get('/hospitalPatients',[hospitalController::class,'patientsFetch']);
    Route::get('/hospitalRequests', function () {
        return view('hospital.requests');
    });
   
    Route::GET('/hospitalVaccines',[hospitalController::class,'vaccinesFetch']);
    route::get('/vaccinedelete/{id}',[vaccineController::class,'delete']);
    route::get('/vaccineedit/{id}',[vaccineController::class,'edit']);
    route::POST('/vaccineupdate/{id}',[vaccineController::class,'update']);
    route::POST('/hospitalVaccines',[vaccineController::class,'hospitalVaccinesPOST']);
    Route::get('/hospitalSchedule', function () {
        return view('hospital.schedule');
    });
    Route::get('/patientsmore', function () {
        return view('hospital.patientsmore');
    });
   //});
    route::get('/Hospitaldelete/{id}',[adminController::class,'addedHospitalDelete']);
  

//Route::group(['middleware'=> 'adminGuard'],function(){
Route::get('/overview',[adminController::class,'overview']);
Route::get('/profile',[adminController::class,'profile']);
Route::get('/schedule',[adminController::class,'schedule']);
route::get('/addhospital',[adminController::class,'hospitalRequest']);
Route::get('/hospital',[adminController::class,'hospitalAdded']);
Route::POST('/hospital',[adminController::class,'hospitalAddedPOST']);
Route::GET('/Vaccines',[adminController::class,'vaccinesFetchAdmin']);
Route::get('/parents',[parentController::class,'adminParent']);
Route::get('/child',[adminController::class,'child']);
//});


Route::get('/parentSignup',[parentController::class,'parentSignup']);

route::post('/parentSignupPost',[parentController::class,'parentSignupFunc']);


route::GET('/parentSignupGET',[parentController::class,'parentSignupFuncGET']);

Route::get('/parentSignin',[parentController::class,'parentSignin']);

Route::post('/parentSigninPost',[parentController::class,'parentSigninPostFunc']);

route::get('/parentLogout',[parentController::class,'parentLogout']);


//Route::group(['middleware'=> 'parentGuard'],function(){
    Route::get('parentOverview', function () {
        return view('parents.parentOverview');
    });
    Route::get('check', function () {
        return view('parents.check');
    });
    
    Route::get('parentProfile', function () {
        return view('parents.profile');
    });
    Route::get('parentAppointment', function () {
        return view('parents.appointment');
    });
    route::get('/parentHospitals',[parentController::class,'parentHospital']);
  
    Route::get('parentMedicalreport', function () {
        return view('parents.medicalreport');
    });
    Route::get('parentVaccine', function () {
        return view('parents.vaccine');
    });
    Route::get('parentSchedule', function () {
        return view('parents.schedule');
    });
//});

   

    //booking

    Route::GET('/bookingVaccine',[adminController::class,'bookingVaccine']);
    Route::GET('/bookingVaccine/{id}',[adminController::class,'bookingVaccinePOST']);

route::post('/bookingVaccinePOST',[parentController::class,'bookingVaccinePOSTFunc']);

route::get('parentRequestdelete/{id}',[parentController::class,'parentRequestdelete']);
route::get('bookingedit/{id}',[parentController::class,'bookingedit']);
route::post('bookingupdate/{id}',[parentController::class,'bookingupdate']);
route::get('bookingdelete/{id}',[parentController::class,'bookingdelete']);
route::get('parentRequestaccept/{id}',[parentController::class,'parentRequestaccept']);

Route::GET('/appointmentRequest',[parentController::class,'parentRequest']);
Route::GET('/bookingAdded',[parentController::class,'bookingAdded']);


Route::GET('/vaccinatedH',[parentController::class,'vaccinatedH']);
Route::GET('/vaccinated',[parentController::class,'vaccinated']);


//booking end

Route::GET('/loginform',[parentController::class,'loginForm']);

Route::post('/contactsubmitform',[adminController::class,'cfunc'])->name('contactsubmitform');

route::post('getdata',[adminController::class, 'getdata'])->name('get.data');
