<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studController;

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

Route::get('wel', function () {
    return view('welcome');
});


Route::view('test', 'test');


// Home Routes
Route::view('layout', 'layout');
Route::view('home', 'home');
Route::view('academics', 'academics');
Route::view('fees-payment', 'fees');
Route::view('lab', 'compLab');
Route::view('lib', 'library');
Route::view('sturom', 'studyroom');
Route::view('canteen', 'canteen');
Route::view('comroom', 'commonroom');
Route::view('bca','BCA');
Route::view('bba','BBA');
Route::view('mca','MCA');
Route::view('msc','MSC');
Route::view('campus', 'campusTour');
Route::view('placement', 'placement');
Route::view('admiQ', 'admissionQuery');
Route::view('admission', 'StudAdmission');
Route::view('noAccess', 'noAccess');


// Admin Routes
Route::view('adreg', 'admin/adminReg');
Route::view('adlog', 'admin/adminlog');

// Admin Controller
Route::post('adsubmit',[adminController::class, 'adRegistration']);   //Registration
Route::post('adlogin', [adminController::class, 'adLogin']);      //Login
Route::get('adlogout', [adminController::class, 'adLogout']);     //Logout
Route::get('ad-query', [adminController::class, 'adQueryDisplay']); //Query Data Display
Route::get('ad-viewQ/{id}', [adminController::class, 'adViewQuery']); //View Query Data
Route::get('profile', [adminController::class, 'adProfileDisplay']); //Admin Display
Route::get('deleteProfile/{id}', [adminController::class, 'deleteAdmin']); //Admin Delete
Route::get('adminad', [adminController::class, 'adStudentAdm']); //Student Admission Data Display
Route::get('dash', [adminController::class, 'adDashboard']); //Dashboard Display
Route::get('viewAdStud/{id}', [adminController::class, 'adStudView']); // Student Admission View Data Display
Route::get('cour', [adminController::class, 'viewCourse']); // Student Admission View Data Display
Route::get('adstud', [adminController::class, 'adStuPortal']); // Student Portal data
Route::get('adstudpview/{id}', [adminController::class, 'adStudPortalView']); // Student portal View Students
Route::get('adminfee', [adminController::class, 'adFees']); // Fees Data
Route::get('adstudup/{id}', [adminController::class, 'adStudUp']); //Update Student Admission Data
Route::get('adstudup', [adminController::class, 'adStudEdit']); //Edit Student Admission Data
Route::get('deleteAdStud/{id}', [adminController::class, 'deleteAdStud']); //Student Admission Delete
Route::get('deleteAdQuery/{id}', [adminController::class, 'deleteAdQuery']); //Admission Query Delete
Route::get('adStudPortalUp/{id}', [adminController::class, 'adStudPortalUp']); //Update Student Portal Data
Route::get('studPortalEdit', [adminController::class, 'studPortalEdit']); //Edit Student Portal Data
Route::get('deleteAdStudPortal/{id}', [adminController::class, 'deleteAdStudPortal']); //Student Portal Delete


// Student Portal Routes
Route::view('studLog', 'studPortal');
Route::view('studReg', 'studentRegistration');
Route::view('studForm', 'studForm');
Route::view('studDash', 'studentDash');

// Student Controller
Route::post('register',[studController::class,'stud_registration']);
Route::post('login',[studController::class,'stud_login']);
Route::get('logout',[studController::class,'stud_logout']);
Route::post('enquiry',[studController::class,'adQuery']);
Route::post('stud',[studController::class,'stud_Addmisson']);
Route::post('fees',[studcontroller::class,'feePay']);
// Route::post('no',[studcontroller::class,'feePay']);
Route::post('create',[studController::class, 'studPortalCreate']);