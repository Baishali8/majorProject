<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\studlog;
use App\Models\admiquerie;
use App\Models\Student;
use App\Models\course;
use App\Models\fee;
use App\Models\studportal;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Session;

class studController extends Controller
{
    //student registration
   public function stud_registration(Request $req)
   {
      $data = new studlog;

      $data->Name = $req->input('Name');
      $data->Student_ID = $req->input('Student_ID');
      $data->Email = $req->input('Email');
      $data->Phone = $req->input('Phone');
      $data->Password = crypt::encrypt($req->input('Password'));

      $data->save();
      // $req->session()->put('user', $req->input('Name'));
      return redirect('studLog');
   }

   //student login
   public function stud_login(Request $req)
   {
      $user = studlog::where('Student_ID', $req->input('Student_ID'))->get ();

      if(crypt::decrypt($user[0]->Password)==$req->input('Password')){
         $req->session()->put('user',$user[0]->Name);
         $req->session()->put('roll',$user[0]->Student_ID);
         return redirect('studDash');
      }
   }

   //student logout
   public function stud_logout(){
      if(session()->has('user')){
         session()->pull('user',null);
      }
      return redirect('studLog');
   }

   //admission query
   public function adQuery(Request $req){
      $data = new admiquerie;

      $data->course = $req->input('course');
      $data->Fname = $req->input('Fname');
      $data->Lname = $req->input('Lname');
      $data->DOB = $req->input('DOB');
      $data->Email = $req->input('Email');
      $data->Mobile = $req->input('Mobile');
      $data->C_Address = $req->input('C_Address');
      $data->P_Address = $req->input('P_Address');
      $data->city = $req->input('city');
      $data->State = $req->input('State');
      $data->zip = $req->input('zip');
      $data->gender = $req->input('gender');
      $data->nationality = $req->input('nationality');
      $data->father = $req->input('father');
      $data->f_occupation = $req->input('f_occupation');
      $data->f_mobile = $req->input('f_mobile');
      $data->mother = $req->input('mother');
      $data->m_occupation = $req->input('m_occupation');
      $data->m_mobile = $req->input('m_mobile');
      $data->school10 = $req->input('school10');
      $data->board10 = $req->input('board10');
      $data->yop10 = $req->input('yop10');
      $data->marks10 = $req->input('marks10');
      $data->percent10 = $req->input('percent10');
      $data->school12 = $req->input('school12');
      $data->board12 = $req->input('board12');
      $data->yop12 = $req->input('yop12');
      $data->marks12 = $req->input('marks12');
      $data->percent12 = $req->input('percent12');
      $data->mathsComp = $req->input('mathsComp');
      $data->college = $req->input('college');
      $data->university = $req->input('university');
      $data->gradYop = $req->input('gradYop');
      $data->gradMarks = $req->input('gradMarks');
      $data->gradStream = $req->input('gradStream');    
      $data->math = $req->input('math');

      $data->save();
      return redirect()->back()->with('success','Query Submitted Successfully');
   }

   //student admission
   public function stud_Addmisson(Request $req){
      $data = new Student;

      $data->Course = $req->input('Course');
      $data->College = $req->input('College');
      // $data->Photo = $req->input('Photo');
      $data->Fname = $req->input('Fname');
      $data->Lname = $req->input('Lname');
      $data->DOB= $req->input('DOB');
      $data->Email= $req->input('Email');
      $data->Aadhar= $req->input('Aadhar');
      $data->C_Address= $req->input('C_Address');
      $data->P_Address= $req->input('P_Address');
      $data->City= $req->input('City');
      $data->State= $req->input('State');
      $data->ZIP= $req->input('ZIP');
      $data->Gender= $req->input('Gender');
      $data->BloodGrp= $req->input('BloodGrp');
      $data->Nationality= $req->input('Nationality');
      $data->Caste= $req->input('Caste');
      $data->Passport= $req->input('Passport');
      $data->Mobile= $req->input('Mobile');
      $data->Guardian= $req->input('Guardian');
      $data->G_ocp= $req->input('G_ocp');
      $data->G_mobile= $req->input('G_mobile');
      $data->Father= $req->input('Father');
      $data->F_ocp= $req->input('F_ocp');
      $data->F_mobile= $req->input('F_mobile');
      $data->Mother= $req->input('Mother');
      $data->M_ocp= $req->input('M_ocp');
      $data->M_mobile= $req->input('M_mobile');
      $data->t10th_School= $req->input('t10th_School');
      $data->t10th_Board= $req->input('t10th_Board');
      $data->t10th_YOP= $req->input('t10th_YOP');
      $data->t10th_Marks= $req->input('t10th_Marks');
      $data->t10th_Percent= $req->input('t10th_Percent');
      $data->t10th_English= $req->input('t10th_English');
      $data->t12th_School= $req->input('t12th_School');
      $data->t12th_Board= $req->input('t12th_Board');
      $data->t12th_YOP= $req->input('t12th_YOP');
      $data->t12th_Marks= $req->input('t12th_Marks');
      $data->t12th_Percent= $req->input('t12th_Percent');
      $data->t12th_English= $req->input('t12th_English');
      $data->t12th_Special= $req->input('t12th_Special');
      $data->Diploma_School= $req->input('Diploma_School');
      $data->Diploma_Univ= $req->input('Diploma_Univ');
      $data->Diploma_YOP= $req->input('Diploma_YOP');
      $data->Diploma_Special= $req->input('Diploma_Special');
      $data->Diploma_Marks= $req->input('Diploma_Marks');
      $data->CET= $req->input('CET');
      $data->Grad_Name= $req->input('Grad_Name');
      $data->Grad_Univ= $req->input('Grad_Univ');
      $data->Grad_YOP= $req->input('Grad_YOP');
      $data->Grad_marks= $req->input('Grad_marks');
      $data->Grad_percent= $req->input('Grad_percent');
      $data->Grad_Special= $req->input('Grad_Special');
      $data->CET_JECA= $req->input('CET_JECA');
      // $data->t10thmarksheet= $req->input('t10thmarksheet');
      // $data->t12thmarksheet= $req->input('t12thmarksheet');
      // $data->Gradmarksheet= $req->input('Gradmarksheet');
      // $data->Diplomamarksheet= $req->input('Diplomamarksheet');

      if($req->hasfile('Photo')){
         $file = $req->file('Photo');
         $filename = $file->getClientOriginalName();
         $file->move('dbstore/',$filename);
         $data->Photo = $filename;
      }
      if($req->hasfile('t10thmarksheet')){
         $file = $req->file('t10thmarksheet');
         $filename = $file->getClientOriginalName();
         $file->move('dbstorepdf/',$filename);
         $data->t10thmarksheet = $filename;
      }
      if($req->hasfile('t12thmarksheet')){
         $file = $req->file('t12thmarksheet');
         $filename = $file->getClientOriginalName();
         $file->move('dbstorepdf/',$filename);
         $data->t12thmarksheet = $filename;
      }
      if($req->hasfile('Gradmarksheet')){
         $file = $req->file('Gradmarksheet');
         $filename = $file->getClientOriginalName();
         $file->move('dbstorepdf/',$filename);
         $data->Gradmarksheet = $filename;
      }
      if($req->hasfile('Diplomamarksheet')){
         $file = $req->file('Diplomamarksheet');
         $filename = $file->getClientOriginalName();
         $file->move('dbstorepdf/',$filename);
         $data->Diplomamarksheet = $filename;
      }

      $data->save();
      // return redirect()->back()->with('success','Admitted Successfully');
      return redirect('fees-payment');
   }

   public function feePay(Request $req){
      $data = new fee;

      $data->StudentID = $req->input('StudentID');
      $data->Fname = $req->input('Fname');
      $data->Lname = $req->input('Lname');
      $data->Email = $req->input('Email');
      $data->Date = $req->input('Date');
      $data->course_id = $req->input('course_id');
      $data->Semester = $req->input('Semester');
      $data->payableFee = $req->input('payableFee');

      $data->save();
      return redirect('noAccess');
   }

   public function studPortalCreate(Request $req){
      $data = new studportal;

      $data->Fname = $req->input('Fname');
      $data->FMname = $req->input('FMname');
      $data->Lname = $req->input('Lname');
      $data->BloodGroup = $req->input('BloodGroup');
      $data->DOB = $req->input('DOB');
      $data->Gender = $req->input('Gender');
      $data->Phone = $req->input('Phone');
      $data->AltPhone = $req->input('AltPhone');
      $data->Email = $req->input('Email');
      $data->AltEmail = $req->input('AltEmail');
      $data->Aadhar = $req->input('Aadhar');
      $data->Pan = $req->input('Pan');
      $data->Passport = $req->input('Passport');
      $data->FatherName = $req->input('FatherName');
      $data->GuadianName = $req->input('GuadianName');
      $data->Occupation = $req->input('Occupation');
      $data->GuadianNumber = $req->input('GuadianNumber');
      $data->Relation = $req->input('Relation');
      $data->MotherName = $req->input('MotherName');
      $data->Occupation2 = $req->input('Occupation2');
      $data->P_Address = $req->input('P_Address');
      $data->PostOffice = $req->input('PostOffice');
      $data->City = $req->input('City');
      $data->Zip = $req->input('Zip');
      $data->State = $req->input('State');
      $data->C_Address = $req->input('C_Address');
      $data->C_PostOffice = $req->input('C_PostOffice');
      $data->C_City = $req->input('C_City');
      $data->C_Zip = $req->input('C_Zip');
      $data->C_State = $req->input('C_State');
      $data->Exam10 = $req->input('Exam10');
      $data->yop10 = $req->input('yop10');
      $data->stdMarks10 = $req->input('stdMarks10');
      $data->actMarks10 = $req->input('actMarks10');
      $data->Board10 = $req->input('Board10');
      $data->Medium10 = $req->input('Medium10');
      $data->Math10 = $req->input('Math10');
      $data->Sci10 = $req->input('Sci10');
      $data->CS10 = $req->input('CS10');
      $data->exam12 = $req->input('exam12');
      $data->YOP12 = $req->input('YOP12');
      $data->StdMarks12 = $req->input('StdMarks12');
      $data->ActMarks12 = $req->input('ActMarks12');
      $data->Board12 = $req->input('Board12');
      $data->Medium12 = $req->input('Medium12');
      $data->Math12 = $req->input('Math12');
      $data->Phy12 = $req->input('Phy12');
      $data->Chem12 = $req->input('Chem12');
      $data->CS12 = $req->input('CS12');
      $data->bcaentrance = $req->input('bcaentrance');
      $data->bcarank = $req->input('bcarank');
      $data->Unireg = $req->input('Unireg');
      $data->Uniroll = $req->input('Uniroll');
      $data->S1marks = $req->input('S1marks');
      $data->S2marks = $req->input('S2marks');
      $data->S3marks = $req->input('S3marks');
      $data->S4marks = $req->input('S4marks');
      $data->S5marks = $req->input('S5marks');
      $data->avgSem = $req->input('avgSem');
      $data->backlog = $req->input('backlog');
      $data->backSub = $req->input('backSub');
      $data->DipExam = $req->input('DipExam');
      $data->DYOP = $req->input('DYOP');
      $data->DSTREAM = $req->input('DSTREAM');
      $data->Davg = $req->input('Davg');
      $data->DUni = $req->input('DUni');
      $data->Yrgap = $req->input('Yrgap');
      $data->Reason = $req->input('Reason');
      $data->PhyDisable = $req->input('PhyDisable');
      $data->workexp = $req->input('workexp');
      $data->PAneed = $req->input('PAneed');

      $data->save();
      return redirect('studDash');
   }
}
