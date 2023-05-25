<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\studlog;
use App\Models\admiquerie;
use App\Models\Student;
use App\Models\course;
use App\Models\studportal;
use App\Models\fee;
use Illuminate\Support\Facades\Crypt;

use Session;

class adminController extends Controller
{
    // Admin Registration
    public function adRegistration(Request $req){
        $data = new admin;

        $data->email = $req->input('email');
        $data->username = $req->input('username');
        $data->password = crypt::encrypt($req->input('password'));

        $data->save();
        $req->session()->put('user', $req->input("username"));
        return redirect("dash");
    }

    // Admin Login
    public function adLogin(Request $req){
        $user = admin::where('email', $req->input('email'))->get();

        if(crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user', $user[0]->username);
            return redirect('dash');
        }
        else{
            return redirect()->back()->with('Error', 'Wrong Email or Password');
        }
    }

    // Admin Logout
    public function adLogout(){
        if(session()->has('user')){
            session()->pull('user', null);
        }
        return redirect('adlog');
    }

    // Admin Query Data Display
    public function adQueryDisplay(){
        // $data = admiquerie::all();
        $data = admiquerie::latest('Id')->get();
        return view ('admin/adminAdQ', ["data"=>$data]);
    }

    // Admin Display
    public function adProfileDisplay(){
        $data = admin::all();
        return view ('admin/adminProfile', ["data"=>$data]);
    }

    // Delete Admin
    public function deleteAdmin($id){
        $data = admin::find($id);
        $data->delete();
        return redirect('profile');
    }

    // Admission Query
    public function adViewQuery($id){
        $data  = admiquerie::find($id);
        return view ('admin/adminViewQuery', ["data"=>$data]);
    }

    // Admission Query Delete
    public function deleteAdQuery($id){
        $data = admiquerie::find($id);
        $data->delete();
        return redirect('ad-query');
    }

    // Course Data
    public function viewCourse(){
        $course = course::all();
        return view('admin/adminCourse', ['course'=>$course]);
    }

    // Fees Data
    public function adFees(){
        $data = fee::all();
        return view('admin/adminFees', ["data"=>$data]);
    }
        
    // Student Admission Student
    public function adStudentAdm(){
        $data = Student::all();
        return view('admin/adminAd', ["data"=>$data]);
    }

    // Admin Dashboard Student
    public function adDashboard(){
        $data = Student::latest('id')->limit(5)->get();
        return view('admin/adminDash',["data"=>$data]);
    }

    // New Admission View
    public function adStudView($id){
        $viewData = Student::find($id);
        return view('admin/adminViewAdStud', ["view"=>$viewData]);
    }
    
    // New Admission Update
    public function adStudUp($id){
        $data = Student::find($id);
        return view('admin.adminAdStudUp', ["newdata"=>$data]);
    }

    // New Admission Edit
    public function adStudEdit(Request $req){
        $mem = Student::find($req->id);
        $mem->Fname = $req->Fname;
        $mem->Lname = $req->Lname;
        $mem->Course = $req->Course;
        $mem->College = $req->College;
        $mem->DOB= $req->DOB;
        $mem->Email= $req->Email;
        $mem->Aadhar= $req->Aadhar;
        $mem->C_Address= $req->C_Address;
        $mem->P_Address= $req->P_Address;
        $mem->City= $req->City;
        $mem->State= $req->State;
        $mem->ZIP= $req->ZIP;
        $mem->Gender= $req->Gender;
        $mem->BloodGrp= $req->BloodGrp;
        $mem->Nationality= $req->Nationality;
        $mem->Caste= $req->Caste;
        $mem->Passport= $req->Passport;
        $mem->Mobile= $req->Mobile;
        $mem->Guardian= $req->Guardian;
        $mem->G_ocp= $req->G_ocp;
        $mem->G_mobile= $req->G_mobile;
        $mem->Father= $req->Father;
        $mem->F_ocp= $req->F_ocp;
        $mem->F_mobile= $req->F_mobile;
        $mem->Mother= $req->Mother;
        $mem->M_ocp= $req->M_ocp;
        $mem->M_mobile= $req->M_mobile;
        $mem->t10th_School= $req->t10th_School;
        $mem->t10th_Board= $req->t10th_Board;
        $mem->t10th_YOP= $req->t10th_YOP;
        $mem->t10th_Marks= $req->t10th_Marks;
        $mem->t10th_Percent= $req->t10th_Percent;
        $mem->t10th_English= $req->t10th_English;
        $mem->t12th_School= $req->t12th_School;
        $mem->t12th_Board= $req->t12th_Board;
        $mem->t12th_YOP= $req->t12th_YOP;
        $mem->t12th_Marks= $req->t12th_Marks;
        $mem->t12th_Percent= $req->t12th_Percent;
        $mem->t12th_English= $req->t12th_English;
        $mem->t12th_Special= $req->t12th_Special;
        $mem->Diploma_School= $req->Diploma_School;
        $mem->Diploma_Univ= $req->Diploma_Univ;
        $mem->Diploma_YOP= $req->Diploma_YOP;
        $mem->Diploma_Special= $req->Diploma_Special;
        $mem->Diploma_Marks= $req->Diploma_Marks;
        $mem->CET= $req->CET;
        $mem->Grad_Name= $req->Grad_Name;
        $mem->Grad_Univ= $req->Grad_Univ;
        $mem->Grad_YOP= $req->Grad_YOP;
        $mem->Grad_marks= $req->Grad_marks;
        $mem->Grad_percent= $req->Grad_percent;
        $mem->Grad_Special= $req->Grad_Special;
        $mem->CET_JECA= $req->CET_JECA;

        $mem->save();
        return redirect('adminad');
    }

    // New Admission Delete
    public function deleteAdStud($id){
        $data = Student::find($id);
        $data->delete();
        return redirect('adminad');
    }

    // Student Portal Data
    public function adStuPortal(){
        $data = studportal::all();
        return view('admin/adminStud', ['data'=>$data]);
    }

    // Student Portal View
    public function adStudPortalView($id){
        $viewData = studportal::find($id);
        return view('admin/adminStudView', ["view"=>$viewData]);
    }

    public function adStudPortalUp($id){
        $data = studportal::find($id);
        return view('admin.adminStudUp', ["view"=>$data]);
    }

    public function studPortalEdit(Request $req){
        $data = studportal::find($req->id);
  
        $data->Fname = $req->Fname;
        $data->BloodGroup = $req->BloodGroup;
        $data->DOB = $req->DOB;
        $data->Gender = $req->Gender;
        $data->Phone = $req->Phone;
        $data->AltPhone = $req->AltPhone;
        $data->Email = $req->Email;
        $data->AltEmail = $req->AltEmail;
        $data->Aadhar = $req->Aadhar;
        $data->Pan = $req->Pan;
        $data->Passport = $req->Passport;
        $data->FatherName = $req->FatherName;
        $data->GuadianName = $req->GuadianName;
        $data->Occupation = $req->Occupation;
        $data->GuadianNumber = $req->GuadianNumber;
        $data->Relation = $req->Relation;
        $data->MotherName = $req->MotherName;
        $data->Occupation2 = $req->Occupation2;
        $data->P_Address = $req->P_Address;
        $data->PostOffice = $req->PostOffice;
        $data->City = $req->City;
        $data->Zip = $req->Zip;
        $data->State = $req->State;
        $data->C_Address = $req->C_Address;
        $data->C_PostOffice = $req->C_PostOffice;
        $data->C_City = $req->C_City;
        $data->C_Zip = $req->C_Zip;
        $data->C_State = $req->C_State;
        $data->Exam10 = $req->Exam10;
        $data->yop10 = $req->yop10;
        $data->stdMarks10 = $req->stdMarks10;
        $data->actMarks10 = $req->actMarks10;
        $data->Board10 = $req->Board10;
        $data->Medium10 = $req->Medium10;
        $data->Math10 = $req->Math10;
        $data->Sci10 = $req->Sci10;
        $data->CS10 = $req->CS10;
        $data->exam12 = $req->exam12;
        $data->YOP12 = $req->YOP12;
        $data->StdMarks12 = $req->StdMarks12;
        $data->ActMarks12 = $req->ActMarks12;
        $data->Board12 = $req->Board12;
        $data->Medium12 = $req->Medium12;
        $data->Math12 = $req->Math12;
        $data->Phy12 = $req->Phy12;
        $data->Chem12 = $req->Chem12;
        $data->CS12 = $req->CS12;
        $data->bcaentrance = $req->bcaentrance;
        $data->bcarank = $req->bcarank;
        $data->Unireg = $req->Unireg;
        $data->Uniroll = $req->Uniroll;
        $data->S1marks = $req->S1marks;
        $data->S2marks = $req->S2marks;
        $data->S3marks = $req->S3marks;
        $data->S4marks = $req->S4marks;
        $data->S5marks = $req->S5marks;
        $data->avgSem = $req->avgSem;
        $data->backlog = $req->backlog;
        $data->backSub = $req->backSub;
        $data->DipExam = $req->DipExam;
        $data->DYOP = $req->DYOP;
        $data->DSTREAM = $req->DSTREAM;
        $data->Davg = $req->Davg;
        $data->DUni = $req->DUni;
        $data->Yrgap = $req->Yrgap;
        $data->Reason = $req->Reason;
        $data->PhyDisable = $req->PhyDisable;
        $data->workexp = $req->workexp;
        $data->PAneed = $req->PAneed;
  
        $data->save();
        return redirect('adstud');
     }

     public function deleteAdStudPortal($id){
        $data = studportal::find($id);
        $data->delete();
        return redirect('adstud');
    }
}
