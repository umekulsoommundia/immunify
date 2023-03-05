<?php

use Illuminate\Support\Facades\Route;

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
Route::get('signup', function () {
    return view('admin.signup');
});
Route::get('signin', function () {
    return view('admin.signin');
});
Route::get('index', function () {
    return view('immunify.index');
});

Route::get('hospitalOverview', function () {
    return view('hospital.hospitalOverview');
});

Route::get('parentOverview', function () {
    return view('parents.parentOverview');
});
Route::get('check', function () {
    return view('parents.check');
});
Route::get('hospitalProfile', function () {
    return view('hospital.profile');
});
Route::get('hospitalAppointments', function () {
    return view('hospital.appointments');
});
Route::get('hospitalPatients', function () {
    return view('hospital.patients');
});
Route::get('hospitalRequests', function () {
    return view('hospital.requests');
});
Route::get('hospitalVaccines', function () {
    return view('hospital.vaccines');
});
Route::get('hospitalSchedule', function () {
    return view('hospital.schedule');
});

Route::get('patientsmore', function () {
    return view('hospital.patientsmore');
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