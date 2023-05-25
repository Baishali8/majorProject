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
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    form {
        box-shadow: 2px 6px 90px #9fa7a9;
      /* background-color: #ff00005d; */

    }
  </style>
</head>
<body>
  <!-- Admission header section starts -->
  <div class="container-fluid py-3">
  <a href="/studDash"><i class="fa-solid fa-arrow-left"></i></a>
    <header class="text-center">
      <h1 class="text-center"><span class="text-danger">Student</span> Form </h1>
    </header>
  </div>
  <!-- admission header section ends -->

  <section class="container my-3 w-50 text-primary fw-bold p-1">
    <form action="/create" method="post" class="row g-3 p-3">
        @csrf
        <h3 class="text-center text-primary">Personal Details</h3>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Student's Full NameN</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your name" name="Fname">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First & Middle Name</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Enter First and Middle name" name="FMname" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Last name" name="Lname">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="Course" class="form-label fw-bold text-primary">Blood Group</label>
        <select class="form-select" aria-lebel="Default select example" name="BloodGroup">
          <option selected>Choose...</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>

        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Date oF Birth</label>
        <input type="date" class="form-control" placeholder="Date of birth" name="DOB" id="inputDOB01" >
      </div>
      </div>
      <div class="col-md-4">
        <label for="Course" class="form-label fw-bold text-primary">Gender</label>
        <select class="form-select" aria-lebel="Default select example" name="Gender" >
          <option selected>Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="validationCustom02" placeholder="9932324778" name="Phone" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Alternate NumberN</label>
        <input type="number" class="form-control" id="validationCustom02" placeholder="8436968378" name="AltPhone">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationCustom02" placeholder="example@gmail.com" name="Email" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Alternate EmailN</label>
        <input type="email" class="form-control" id="validationCustom02" placeholder="example2@gmail.com" name="AltEmail">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h3 class="text-center text-primary mt-3">Identity Details</h3>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Aadhar Number</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="236512890749" name="Aadhar">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Pan NumberN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="AE966F54822" name="Pan">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Passport Number</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="111377635" name="Passport">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Father's Name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Father's name" name="FatherName" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Guadian's Name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Guardian's name" name="GuadianName" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Buisnessman" name="Occupation" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Guadian's Contact Number</label>
        <input type="number" class="form-control" id="validationCustom02" placeholder="7364060287" name="GuadianNumber" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="Course" class="form-label fw-bold text-primary">Relation With GurdianN</label>
        <select class="form-select" aria-lebel="Default select example" name="Relation">
          <option selected>Relation With Gurdian</option>
          <option value="Father">father</option>
          <option value="Mother">Mother</option>
          <option value="Elder Brother">Elder Brother</option>
          <option value="Elder Sister">Elder Sister</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Mother's Name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy Happy Bilal" name="MotherName" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="Occupation2" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Permanent Address</label>
        <textarea class="form-control" Style="resize:none;"id="validationCustom02" cols="40" placeholder="4th Chowringee Square" name="P_Address" ></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Post OfficeN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Krishnanagar" name="PostOffice">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">City/Vill</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Krishnanagar" name="City"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Pin Code</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="741121" name="Zip"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label fw-bold text-primary">State</label>
        <select id="inputState" class="form-select" name="State"  >
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
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Present Address</label>
        <textarea name="C_Address"   class="form-control" Style="resize:none;"id="validationCustom02" cols="40" placeholder="4th Chowringee Square"></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Post OfficeN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Krishnanagar" name="C_PostOffice">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">City/VillN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Krishnanagar" name="C_City">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Pin CodeN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="741121" name="C_Zip">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label fw-bold text-primary">StateN</label>
        <select id="inputState" class="form-select" name="C_State">
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
      <h3 class="text-center text-primary">Academics</h3>
      <h4 class="text-primary">Class X Details</h4>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Name Of ExaminationN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="Exam10">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" id="validationCustom02" placeholder="111377635" name="yop10" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Standard %</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="98.55" name="stdMarks10"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Actual</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="78" name="actMarks10"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Board</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="Board10">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Medium Of StudyN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="English" name="Medium10">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h4 class="text-primary">Class X Other Details</h4>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Class X Math % N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="78" name="Math10">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Science{(PHY+CHEM+BIO)/3}% N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="Sci10">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Class X CA/CS% N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="English" name="CS10">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h4 class="text-primary">Class XII Details</h4>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Name Of ExaminationN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="exam12">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" id="validationCustom02" placeholder="111377635" name="YOP12"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Standard %</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="98.55" name="StdMarks12"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Actual</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="78" name="ActMarks12"  >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Board</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="Board12" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Medium Of StudyN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="English" name="Medium12">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h4 class="text-primary">Class XII Other Academmics Details</h4>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Class XII Math %N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="78" name="Math12">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Class XII Physics %N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="Phy12">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Class XII Chemistry %N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="English" name="Chem12">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Class XII CS/CA %N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="English" name="CS12">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h4 class="text-primary">BCA details</h4>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Entrance Examination NameN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy Happy Bilal" name="bcaentrance">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">RankN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="bcarank">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">University Registration No.N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy Happy Bilal" name="Unireg">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">University Roll No.N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="Uniroll">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sem 1N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="S1marks">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sem 2N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy Happy Bilal" name="S2marks">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sem 3N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="S3marks">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sem 4N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="S4marks">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sem 5N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy Happy Bilal" name="S5marks">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Sem 6N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="S6marks">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">AverageN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="avgSem">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="Course" class="form-label fw-bold text-primary">Any Backlog During BCA?N</label>
        <select class="form-select" aria-lebel="Default select example" name="backlog">
          <option selected>Choose...</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Subject NameN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Happy happy dance" name="backSub">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h4 class="text-primary">Diploma Details</h4>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Name Of ExaminationN</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="WBBSE" name="DipExam">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Year Of Passing</label>
        <input type="date" class="form-control" id="validationCustom02" placeholder="111377635" name="DYOP">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Stream</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="98.55" name="DSTREAM" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Average</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="98.55" name="Davg" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">University Name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Buslim University" name="DUni" >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <h4 class="text-primary">Any gap in academics (Class X to till date)</h4>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Duration of Gap (In Years)N</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Buslim University" name="Yrgap">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">State the Periord and ReasonN</label>
        <textarea name="Reason" class="form-control" Style="resize:none;"id="validationCustom02" cols="40" placeholder="4th Chowringee Square"></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Any physical disability (if yes): give detailsN</label>
        <textarea name="PhyDisable" class="form-control" Style="resize:none;"id="validationCustom02" cols="40" placeholder="4th Chowringee Square" name="Permanent Address"></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom02" class="form-label"> Any work experience (if yes)N</label>
        <textarea name="workexp" class="form-control" Style="resize:none;"id="validationCustom02" cols="40" placeholder="4th Chowringee Square" name="Permanent Address"></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-12">
        <label for="Course" class="form-label fw-bold text-primary">I want Placement Assistance from College:</label>
        <select class="form-select" aria-lebel="Default select example" name="PAneed">
          <option selected>Choose...</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
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
        <input type="submit" name="form" class="btn btn-success form-control">
      </div>
    </form>
  </section>
</body>
</html>
