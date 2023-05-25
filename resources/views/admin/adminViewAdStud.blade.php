<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <form class="row">
                            @csrf
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Student ID</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['id']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Fname']}} {{$view['Lname']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Course</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Course']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">College</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['College']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Photo</label>
                                <!-- <img src="{{$view['Photo']}}" class="img-fluid" alt=""> -->
                                <img src="{{asset('dbstore/'.$view['Photo'])}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Email']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Date Of Birth</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['DOB']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Aadhar Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Aadhar']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Current Address</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['C_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Permanent Address</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['P_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">City</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['City']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">State</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['State']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">ZIP Code</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['ZIP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Gender</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Gender']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Blood Group</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['BloodGrp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Nationality</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Nationality']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Caste</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Caste']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Passport</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Passport']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Guardian']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['G_ocp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['G_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Father']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['F_ocp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['F_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Mother']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['M_ocp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['M_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th School Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10th_School']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Board</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10th_Board']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10th_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Total Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10th_Marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Percentage</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10th_Percent']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th English Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10th_English']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th School Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_School']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Board</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_Board']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Total Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_Marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Percentage</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_Percent']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th English Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_English']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Maths/CS/IT/CA Marks </label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12th_Special']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Institue Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Diploma_School']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma University Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Diploma_Univ']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Diploma_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Maths/CA/CS/IT Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Diploma_Special']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Total Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Diploma_Marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">CET For BCA and BBA</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['CET']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Institute</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Grad_Name']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation University</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Grad_Univ']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Grad_YOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Marks/CGPA</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Grad_marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Percentage</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Grad_percent']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graudation Math/Stat/Phy/CS Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Grad_Special']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">JECA/CET Rank</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['CET_JECA']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Marksheet</label>
                                <!-- <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t10thmarksheet']}}"> -->
                                <a href="{{asset('dbstorepdf/'.$view['t10thmarksheet'])}}" target="_blank" class="d-block">Download</a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Marksheet</label>
                                <!-- <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['t12thmarksheet']}}"> -->
                                <a href="{{asset('dbstorepdf/'.$view['t12thmarksheet'])}}" target="_blank" class="d-block">Download</a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Marksheet</label>
                                <!-- <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Diplomamarksheet']}}"> -->
                                <a href="{{asset('dbstorepdf/'.$view['Diplomamarksheet'])}}" target="_blank" class="d-block">Download</a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Graduation Marksheet</label>
                                <!-- <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Gradmarksheet']}}"> -->
                                <a href="{{asset('dbstorepdf/'.$view['Gradmarksheet'])}}" target="_blank" class="d-block">Download</a>
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