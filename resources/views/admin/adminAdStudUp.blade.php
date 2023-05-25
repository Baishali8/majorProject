<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="dataport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard TIH</title>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CDn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../CSS/admin/admin.css">
    <style>
        img{
            display: block;
            width: 80px;
        }
    </style>
</head>
<body>
    
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->

        <div class="bg" id="sidebar-wrapper">

            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i> Admin TIH
            </div>

            <div class="list-group list-group-flush my-3 sidebar">
                <a href="/dash" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-chart-simple me-2"></i>Dashboard</a>
                <a href="/adstud" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-sharp fa-solid fa-graduation-cap me-2"></i>Students</a>
                <a href="/cour" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-book-open me-2"></i>Course</a>
                <a href="/adminfee" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-money-bill me-2"></i>Fees</a>
                <a href="/adminad" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user-graduate me-2"></i>New Admission</a>
                <a href="/ad-query" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-comment me-2"></i>Query</a>
                <a href="/profile" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user-plus me-2"></i>Register Admin</a>
                <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
            </div>

        </div>

        <!-- Sidebar End -->

        <div id="page-content-wrapper">
            
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    

                    <h2 class="fs-2 m-0 ">Students List</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>   

                <div class="collpase navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @if(Session::get('user'))
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbar-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user me-2"></i><span>{{Session::get('user')}}</span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-item">Profile</a></li>
                                <li><a href="#" class="dropdown-item">Settings</a></li>
                                <li><a href="/adlogout" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Main -->

            <div class="container-fluid px-4">
                <div class="row my-5">
                    <div class="d-flex justify-content-between">
                        <h3 class="fs-4 mb-3">View Student Information</h3>
                        <a href="/adminad" class="btn btn-primary m-2 btn-sm">Go Back</a>
                    </div>

                    <div class="">
                        <form action="/adstudup" method="get" class="row">
                            @csrf
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Student ID</label>
                                <input type="text" class="form-control" id="exampleInputID1" readonly aria-describedby="idHelp" name="id"  value="{{$newdata['id']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">First Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Fname"  value="{{$newdata['Fname']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Lname"  value="{{$newdata['Lname']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Course</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Course"  value="{{$newdata['Course']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">College</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="College"  value="{{$newdata['College']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Photo</label>
                                <!-- <img src="{{$newdata['Photo']}}" class="img-fluid" alt=""> -->
                                <img src="{{asset('dbstore/'.$newdata['Photo'])}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Email"  value="{{$newdata['Email']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mobile Number</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Mobile"  value="{{$newdata['Mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Date Of Birth</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="DOB"  value="{{$newdata['DOB']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Aadhar Number</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Aadhar"  value="{{$newdata['Aadhar']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Current Address</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="C_Address"  value="{{$newdata['C_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Permanent Address</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="P_Address"  value="{{$newdata['P_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">City</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="City"  value="{{$newdata['City']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">State</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="State"  value="{{$newdata['State']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">ZIP Code</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="ZIP"  value="{{$newdata['ZIP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Gender</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Gender"  value="{{$newdata['Gender']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Blood Group</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="BloodGrp"  value="{{$newdata['BloodGrp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Nationality</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Nationality"  value="{{$newdata['Nationality']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Caste</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Caste"  value="{{$newdata['Caste']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Passport</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Passport"  value="{{$newdata['Passport']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Guardian"  value="{{$newdata['Guardian']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian Occupation</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="G_ocp"  value="{{$newdata['G_ocp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian Mobile Number</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="G_mobile"  value="{{$newdata['G_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Father"  value="{{$newdata['Father']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father Occupation</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="F_ocp"  value="{{$newdata['F_ocp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father Mobile Number</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="F_mobile"  value="{{$newdata['F_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Mother"  value="{{$newdata['Mother']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother Occupation</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="M_ocp"  value="{{$newdata['M_ocp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother Mobile Number</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="M_mobile"  value="{{$newdata['M_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th School Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t10th_School"  value="{{$newdata['t10th_School']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Board</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t10th_Board"  value="{{$newdata['t10th_Board']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th YOP</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t10th_YOP"  value="{{$newdata['t10th_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Total Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t10th_Marks"  value="{{$newdata['t10th_Marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Percentage</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t10th_Percent"  value="{{$newdata['t10th_Percent']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th English Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t10th_English"  value="{{$newdata['t10th_English']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th School Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_School"  value="{{$newdata['t12th_School']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Board</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_Board"  value="{{$newdata['t12th_Board']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th YOP</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_YOP"  value="{{$newdata['t12th_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Total Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_Marks"  value="{{$newdata['t12th_Marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Percentage</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_Percent"  value="{{$newdata['t12th_Percent']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th English Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_English"  value="{{$newdata['t12th_English']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Maths/CS/IT/CA Marks </label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="t12th_Special"  value="{{$newdata['t12th_Special']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Institue Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Diploma_School"  value="{{$newdata['Diploma_School']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma University Name</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Diploma_Univ"  value="{{$newdata['Diploma_Univ']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma YOP</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Diploma_YOP"  value="{{$newdata['Diploma_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Maths/CA/CS/IT Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Diploma_Special"  value="{{$newdata['Diploma_Special']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Total Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Diploma_Marks"  value="{{$newdata['Diploma_Marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">CET For BCA and BBA</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="CET"  value="{{$newdata['CET']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Institute</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Grad_Name"  value="{{$newdata['Grad_Name']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation University</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Grad_Univ"  value="{{$newdata['Grad_Univ']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation YOP</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Grad_YOP"  value="{{$newdata['Grad_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Marks/CGPA</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Grad_marks"  value="{{$newdata['Grad_marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Percentage</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Grad_percent"  value="{{$newdata['Grad_percent']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Math/Stat/Phy/CS Marks</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="Grad_Special"  value="{{$newdata['Grad_Special']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">JECA/CET Rank</label>
                                <input type="text" class="form-control" id="exampleInputID1" aria-describedby="idHelp" name="CET_JECA"  value="{{$newdata['CET_JECA']}}">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary mb-3" name="submit"></input>
                            </div>
                        </form>
                    </div>

                </div>




        </div>
            <!-- Main Body -->
            <!-- Footer -->
            <!--
            <footer class="bg-dark text-center text-white">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    Baishali Dutta
                </div>
            </footer>
            -->
            <!-- Footer End -->
            
        </div>
       
    </div>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Custom Js -->
    <script src="../JS/admin.js"></script>

</body>
</html>