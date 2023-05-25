<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>TIH-Admission</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }

    form {
        box-shadow: 2px 6px 90px #9fa7a9;
    }
  </style>
</head>

<body>
  <!-- Admission header section starts -->
  <div class="container-fluid py-3">
  <a href="/home"><i class="fa-solid fa-arrow-left"></i></a>
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fase show" role="alert">
      <h6>{{session('success')}}</h6>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  
    <header class="text-center">
      <h1 class="display-6 fw-bold"><span class="text-danger">Admission</span> Form</h1>
    </header>
  </div>
  <!-- admission header section ends -->

  <section class="container my-3 w-50 text-primary fw-bold p-1">
    <form action="/stud" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        @csrf
      <div class="col-md-4">
        <label for="Course" class="form-label">Select Course</label>
        <select class="form-select" aria-lebel="Default select example" name="Course">
          <option selected>Courses</option>
          <option value="BCA">BCA</option>
          <option value="BBA">BBA</option>
          <option value="MCA">MCA</option>
          <option value="Msc">Msc. Computer Science</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="Course" class="form-label">College Name</label>
        <select class="form-select" aria-lebel="Default select example" name="College">
          <option selected>College Name</option>
          <option value="TIH">Techno India (Hooghly Campus) for BCA </option>
          <option value="TCH">Techno College Hooghly for MCA</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Passport Size photo</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="Photo">

      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Diya" name="Fname">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Meaw" name="Lname">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Date oF Birth</label>
        <input type="date" class="form-control" placeholder="Date of birth" name="DOB" id="inputDOB01">

      </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="example@gmail.com" name="Email" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">AADHAR No.</label>
        <input type="number" class="form-control" placeholder="Type your AADHAR Number" name="Aadhar" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Current Address</label>
        <input type="text" class="form-control" placeholder="1234 Main St" name="C_Address" id="inputAddress">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Permanent Address</label>
        <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="P_Address" id="inputAddress2">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" placeholder="Krishnanagar" name="City" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
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
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" placeholder="pincode" name="ZIP" id="inputZip">
      </div>
      <div class="col-md-4">
        <label for="Course" class="form-label">Gender</label>
        <select class="form-select" aria-lebel="Default select example" name="Gender">
          <option selected>Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="Course" class="form-label">Blood-Group</label>
        <select class="form-select" aria-lebel="Default select example" name="BloodGrp">
          <option selected>Blood-Type</option>
          <option value="Male">A+</option>
          <option value="Female">A-</option>
          <option value="Others">B+</option>
          <option value="Others">B-</option>
          <option value="Others">O+</option>
          <option value="Others">O-</option>
          <option value="Others">AB+</option>
          <option value="Others">AB-</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Nationality</label>
        <input type="text" class="form-control" placeholder="Nationality" name="Nationality" id="inputDOB01">

      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Caste</label>
        <input type="text" class="form-control" placeholder="Caste" name="Caste" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Passport</label>
        <input type="text" class="form-control" placeholder="Yes/No" name="Passport" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Enter Your Number" name="Mobile" id="inputDOB01">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Local Guardian's Name</label>
        <input type="text" class="form-control" placeholder="Guardian's Name" name="Guardian" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Occupation</label>
        <input type="text" class="form-control" placeholder="Occupation" name="G_ocp" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Guardian's Mobile Number" name="G_mobile" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Father's Name</label>
        <input type="text" class="form-control" placeholder="Father's Name" name="Father" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Occupation</label>
        <input type="text" class="form-control" placeholder="Occupation" name="F_ocp" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Father's Number" name="F_mobile" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Mother's Name</label>
        <input type="text" class="form-control" placeholder="Mother's Name" name="Mother" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Occupation</label>
        <input type="text" class="form-control" placeholder="Mother's Occupation" name="M_ocp" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Mother's Phone Number" name="M_mobile" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">10th School Name</label>
        <input type="text" class="form-control" placeholder="10th School Name" name="t10th_School" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Board</label>
        <input type="text" class="form-control" placeholder="Board Name" name="t10th_Board" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="t10th_YOP" id="inputDOB01">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Marks Obtained</label>
        <input type="text" class="form-control" placeholder="Marks Obtained" name="t10th_Marks" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Percentage/DGPA</label>
        <input type="text" class="form-control" placeholder="Percentage/DGPA" name="t10th_Percent" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Marks of English</label>
        <input type="text" class="form-control" placeholder="Your Marks in English" name="t10th_English" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">12th School Name</label>
        <input type="text" class="form-control" placeholder="Your 12th School Name" name="t12th_School"  id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Board</label>
        <input type="text" class="form-control" placeholder="Your 12th Board" name="t12th_Board" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="t12th_YOP" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Marks Obtained</label>
        <input type="text" class="form-control" placeholder="Marks Obtained in class 12th" name="t12th_Marks" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Percentage/DGPA</label>
        <input type="text" class="form-control" placeholder="Percentage of Class 12th" name="t12th_Percent" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Marks of English</label>
        <input type="text" class="form-control" placeholder="Your Marksin English in class12th" name="t12th_English" id="inputDOB01">
      </div>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Marks of Math/BM/CA/CS/Information Practice</label>
        <input type="text" class="form-control"  placeholder="Marks of Math/BM/CA/CS/Information Practice" name="t12th_Special" id="inputAddress">
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Diploma Institute Name</label>
        <input type="text" class="form-control" placeholder="College Name" name="Diploma_School">

      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">University</label>
        <input type="text" class="form-control"  placeholder="University Name" name="Diploma_Univ" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="Diploma_YOP" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Marks of Math/BM/CA/CS/Information Practice</label>
        <input type="text" class="form-control" placeholder="Marks of Math/BM/CA/CS/Information Practice" name="Diploma_Special" id="inputMarks4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Marks Obtained</label>
        <input type="text" class="form-control" placeholder="Marks Obtained" name="Diploma_Marks" id="inputPassword4">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">CET* RANK for BCA & BBA</label>
        <input type="text" class="form-control"  placeholder="Your CET RANK" name="CET" id="inputAddress">
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Graduation Institute Name</label>
        <input type="text" class="form-control"  placeholder="College Name" name="Grad_Name" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">University</label>
        <input type="text" class="form-control"  placeholder="University Name" name="Grad_Univ" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" placeholder="YOP" name="Grad_YOP" id="inputDOB01">
      </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Marks Obtained</label>
        <input type="text" class="form-control"   placeholder="Marks Obtained" name="Grad_marks" id="validationCustom01">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Percentage/DGPA</label>
        <input type="text" class="form-control"  placeholder="Enter your  Percentage/DGPA" name="Grad_percent" id="validationCustom02">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Marks of IT/CS/Math/Phys/Stat</label>
        <input type="text" class="form-control" placeholder="Marks of IT/CS/Math/Phys/Stat" name="Grad_Special" id="inputDOB01">
      </div>
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">CET* / JECA* RANK</label>
        <input type="text" class="form-control" placeholder="If Msc. enter CET rank otherwise enter your JECA rank" name="CET_JECA" id="inputAddress">
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">10th Marksheet</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="t10thmarksheet">

      </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">12th Marksheet</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="t12thmarksheet">

      </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Diploma Marksheet</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="Diplomamarksheet">

      </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Graduation Marksheet</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="Gradmarksheet">

      </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            I sincerely accept all the terms and conditions
          </label>
        </div>
      </div>
      <div class="col-12">
        <input type="submit" name="form" class="btn btn-primary bg-info form-control">
      </div>
    </form>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>