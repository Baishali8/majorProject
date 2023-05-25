@extends('layout')

@section('content')


    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    *{
         font-family: "Roboto",sans-sarif;
    }
    .container img {
      width: 50%;
      margin-right: 15px;
      padding-right: 10px;

    }
    .heading h1::after {
      content: "";
      display: block;
      width: 130px;
      max-width: 100%;
      border-bottom: 3px solid #0A2647;
      margin: 3px auto 4px;
    }
    form
    {
        box-shadow: 2px 6px 90px #9fa7a9;
      /* background-color: #ff00005d; */

    }

    </style>
<div class="m-2">
    <img src="./images/enquiry.png" class="img-fluid" alt="">
  </div>

<div class="container">
    <h1 class="m-5 text-center">About Enquiry<span class="text-danger"> Form</span> </h1>
    <p class=" m-5 text-center">Fill up this online enquery form to show your interest in taking admission in to the institute. We will contact you for further processing.

        Please remember that this is just an Admission Enquery Form. To take admission you have to visit come to college campus on any working day between 11:00AM to 04:00PM. Techno India Hooghly offers Direct Admission in BBA, BCA, M.Sc Computer Science. The admission procedure for BBA, BCA, M.Sc Computer Science will be carried out on First Come First Serve basis.

        For MCA (AICTE Approved) candidate should have a valid WBJECA (Entrance Examination for 3 Year's AICTE Approved MCA Course) rank. The admission for MCA is conducted through Counseling conducted by West Bengal Board of Joint Entrance Examination or direct admission as per government rule.

        Call Admission Helpline for any kind of help: (+91) 9475052378 / (+91) 9433633323 / (+91) 9874271818
    </p>
</div>
<h1 class="m-5 text-center"><span class="text-danger">Enquiry</span> Form</h1>

{{-- Form Starts --}}
<section class="container my-3 w-50 text-light p-1">
    <form action="/form" method="post" class="row g-3 p-3">
        @csrf
      <div class="col-md-12">
        <label for="Course" class="form-label fw-bold text-primary">Select Course</label>
        <select class="form-select" aria-lebel="Default select example" name="Course">
          <option selected>Courses</option>
          <option value="BCA">BCA</option>
          <option value="BBA">BBA</option>
          <option value="MCA">MCA</option>
          <option value="Msc">Msc. Computer Science</option>
        </select>
      </div>


      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">First name</label>
        <input type="text" class="form-control fw-bold" id="validationCustom01" placeholder="Diya" name="Fname">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Meaw" name="Lname">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Date oF Birth</label>
        <input type="date" class="form-control" placeholder="Date of birth" name="DOB" id="inputDOB01">

      </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label fw-bold text-primary">Email</label>
        <input type="email" class="form-control" placeholder="example@gmail.com" name="Email" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label fw-bold text-primary">AADHAR No.</label>
        <input type="number" class="form-control" placeholder="Type your AADHAR Number" name="Aadhar" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label fw-bold text-primary">Current Address</label>
        <input type="text" class="form-control" placeholder="1234 Main St" name="C_Address" id="inputAddress">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label fw-bold text-primary">Permanent Address</label>
        <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="P_Address" id="inputAddress2">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label fw-bold text-primary">City</label>
        <input type="text" class="form-control" placeholder="Krishnanagar" name="City" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label fw-bold text-primary">State</label>
        <select id="inputState" class="form-select" name="State">
          <option selected>Choose...</option>
          <option value="West Bengal">West Bengal</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value=" Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label fw-bold text-primary">Zip</label>
        <input type="text" class="form-control" placeholder="pincode" name="ZIP" id="inputZip">
      </div>
      <div class="col-md-6">
        <label for="Course" class="form-label fw-bold text-primary">Gender</label>
        <select class="form-select" aria-lebel="Default select example" name="Gender">
          <option selected>Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Nationality</label>
        <input type="text" class="form-control" placeholder="Nationality" name="Nationality" id="inputDOB01">

      </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Father's Name</label>
        <input type="text" class="form-control" placeholder="Father's Name" name="Father" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Occupation</label>
        <input type="text" class="form-control" placeholder="Occupation" name="F_ocp" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Father's Number" name="F_mobile" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Mother's Name</label>
        <input type="text" class="form-control" placeholder="Mother's Name" name="Mother" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Occupation</label>
        <input type="text" class="form-control" placeholder="Mother's Occupation" name="M_ocp" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Mother's Phone Number" name="M_mobile" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">10th School Name</label>
        <input type="text" class="form-control" placeholder="10th School Name" name="t10th_School" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Board</label>
        <input type="text" class="form-control" placeholder="Board Name" name="t10th_Board" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="t10th_YOP" id="inputDOB01">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Marks Obtained</label>
        <input type="text" class="form-control" placeholder="Marks Obtained" name="t10th_Marks" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Percentage/DGPA</label>
        <input type="text" class="form-control" placeholder="Percentage/DGPA" name="t10th_Percent" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Marks of English</label>
        <input type="text" class="form-control" placeholder="Your Marks in English" name="t10th_English" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">12th School Name</label>
        <input type="text" class="form-control" placeholder="Your 12th School Name" name="t12th_School"  id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Board</label>
        <input type="text" class="form-control" placeholder="Your 12th Board" name="t12th_Board" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="t12th_YOP" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Marks Obtained</label>
        <input type="text" class="form-control" placeholder="Marks Obtained in class 12th" name="t12th_Marks" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Percentage/DGPA</label>
        <input type="text" class="form-control" placeholder="Percentage of Class 12th" name="t12th_Percent" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Marks of English</label>
        <input type="text" class="form-control" placeholder="Your Marksin English in class12th" name="t12th_English" id="inputDOB01">
      </div>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label fw-bold text-primary">Marks of Math/BM/CA/CS/Information Practice</label>
        <input type="text" class="form-control"  placeholder="Marks of Math/BM/CA/CS/Information Practice" name="t12th_Special" id="inputAddress">
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Diploma Institute Name</label>
        <input type="text" class="form-control" placeholder="College Name" name="Diploma_School">

      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">University</label>
        <input type="text" class="form-control"  placeholder="University Name" name="Diploma_Univ" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="Diploma_YOP" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label fw-bold text-primary">Marks of Math/BM/CA/CS/Information Practice</label>
        <input type="text" class="form-control" placeholder="Marks of Math/BM/CA/CS/Information Practice" name="Diploma_Special" id="inputMarks4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label fw-bold text-primary">Marks Obtained</label>
        <input type="text" class="form-control" placeholder="Marks Obtained" name="Diploma_Marks" id="inputPassword4">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Graduation Institute Name</label>
        <input type="text" class="form-control"  placeholder="College Name" name="Grad_Name" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">University</label>
        <input type="text" class="form-control"  placeholder="University Name" name="Grad_Univ" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="Grad_YOP" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label fw-bold text-primary">Marks Obtained</label>
        <input type="text" class="form-control"   placeholder="Marks Obtained" name="Grad_marks" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label fw-bold text-primary">Percentage/DGPA</label>
        <input type="text" class="form-control"  placeholder="Enter your  Percentage/DGPA" name="Grad_percent" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label fw-bold text-primary">Marks of IT/CS/Math/Stat</label>
        <input type="text" class="form-control" placeholder="Marks of CS/Math/Phys/Stat" name="Grad_Special" id="inputDOB01">
      </div>
      </div>


      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label fw-bold text-primary" for="gridCheck">
            Yes,I have Maths/CS/CA/Phys/IT/BM/Stat as a subject in 10+2 or Graduation
          </label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label fw-bold text-primary" for="gridCheck">
            I sincerely accept all the terms and conditions
          </label>
        </div>
      </div>
      <div class="col-12">
        <input type="submit" name="form" class="btn bg-info form-control">
      </div>
    </form>
  </section>
@stop
