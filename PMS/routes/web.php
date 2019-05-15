<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('appointment','AppointmentController');
Route::get('/addappointment','AppointmentController@display');
Route::get('/displayappointment','AppointmentController@show');
Route::get('deleteappoinment','AppointmentController@destroy');

Route::resource('prescription','PrescriptionController');
Route::get('/addprescription','PrescriptionController@display');
Route::get('/displayprescription','PrescriptionController@show');


Route::resource('about','AboutController');
Route::get('about','AboutController@display')->name('about.display');
Route::resource('features','FeaturesController');
Route::get('features','FeaturesController@display')->name('features.display');
Route::resource('doctors','DoctorsController');
Route::get('doctors','DoctorsController@display')->name('doctors.display');
Route::resource('department','DepartmentController');
Route::get('department','DepartmentController@display')->name('department.display');
Route::resource('gallery','GalleryController');
Route::get('gallery','GalleryController@display')->name('gallery.display');
Route::resource('contact','ContactController');
Route::get('contact','ContactController@display')->name('contact.display');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']],function(){
   Route::get('/dashboard','DashboardController@index')->name('dashboard');
   Route::resource('tag','TagController');
});
Route::group(['as'=>'doctor.','prefix'=>'doctor','namespace'=>'Doctor','middleware'=>['auth','doctor']],function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('doctoradd','DoctorController');
    Route::post('doctornew','DoctorController@store');
    Route::get('create','DoctorController@create');
    Route::get('doctorshow','DoctorController@show');
    Route::resource('prescription','PrescriptionController');
    Route::resource('appointment','AppointmentController');
    
    
    
    
});
Route::group(['as'=>'patient.','prefix'=>'patient','namespace'=>'Patient','middleware'=>['auth','patient']],function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('appointment','AppointmentController');
    Route::resource('prescription','PrescriptionController');

});

