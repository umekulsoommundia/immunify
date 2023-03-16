<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\hospitalController;
use App\Http\Controllers\parentController;
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

Route::get('vaccines', function () {
    return view('admin.vaccines');
});

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






Route::group(['middleware'=> 'hospitalGuard'],function(){
    Route::get('/hospitalOverview', function () {
        return view('hospital.hospitalOverview');
    });
    Route::get('/hospitalProfile', function () {
        return view('hospital.profile');
    });
    Route::get('/hospitalAppointments', function () {
        return view('hospital.appointments');
    });
    Route::get('/hospitalPatients', function () {
        return view('hospital.patients');
    });
    Route::get('/hospitalRequests', function () {
        return view('hospital.requests');
    });
    Route::get('/hospitalVaccines', function () {
        return view('hospital.vaccines');
    });
    Route::get('/hospitalSchedule', function () {
        return view('hospital.schedule');
    });
    
    Route::get('/patientsmore', function () {
        return view('hospital.patientsmore');
    });

    });



Route::group(['middleware'=> 'adminGuard'],function(){
Route::get('/overview',[adminController::class,'overview']);
Route::get('/profile',[adminController::class,'profile']);
Route::get('/schedule',[adminController::class,'schedule']);
route::get('/addhospital',[adminController::class,'hospitalRequest']);
Route::get('/hospital',[adminController::class,'hospitalAdded']);
Route::get('/vaccines',[adminController::class,'vaccines']);
Route::get('/parents',[adminController::class,'parents']);
Route::get('/child',[adminController::class,'child']);
});


Route::get('/parentSignup',[parentController::class,'parentSignup']);

route::post('/parentSignupPost',[parentController::class,'parentSignupFunc']);

Route::get('/parentSignin',[parentController::class,'parentSignin']);

Route::post('/parentSigninPost',[parentController::class,'parentSigninPostFunc']);

route::get('/parentLogout',[parentController::class,'parentLogout']);


Route::group(['middleware'=> 'parentGuard'],function(){
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
    Route::get('parentHospitals', function () {
        return view('parents.hospital');
    });
    Route::get('parentMedicalreport', function () {
        return view('parents.medicalreport');
    });
    Route::get('parentVaccine', function () {
        return view('parents.vaccine');
    });
    Route::get('parentSchedule', function () {
        return view('parents.schedule');
    });
    
    });