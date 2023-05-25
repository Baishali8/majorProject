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
                <a href="/adlogout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
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
                        <a href="/adstud" class="btn btn-primary m-2 btn-sm">Go Back</a>
                    </div>

                    <div class="">
                        <form class="row" action="/studPortalEdit" method="get">
                            @csrf
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Student ID</label>
                                <input type="text" class="form-control" readonly name="id" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['id']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control" name="Fname" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Fname']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Blood Group</label>
                                <input type="text" class="form-control" name="BloodGroup" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['BloodGroup']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Date of Birth</label>
                                <input type="text" class="form-control" name="DOB" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['DOB']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Gender</label>
                                <input type="text" class="form-control" name="Gender" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Gender']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control" name="Phone" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Phone']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Alt. Phone Number</label>
                                <input type="text" class="form-control" name="AltPhone" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['AltPhone']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" name="Email" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Email']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Alt. Email</label>
                                <input type="text" class="form-control" name="AltEmail" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['AltEmail']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Aadhar Number</label>
                                <input type="text" class="form-control" name="Aadhar" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Aadhar']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Pan Number</label>
                                <input type="text" class="form-control" name="Pan" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Pan']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Passport Number</label>
                                <input type="text" class="form-control" name="Passport" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Passport']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father's Name</label>
                                <input type="text" class="form-control" name="FatherName" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['FatherName']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian's Name</label>
                                <input type="text" class="form-control" name="GuadianName" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['GuadianName']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Occupation</label>
                                <input type="text" class="form-control" name="Occupation" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Occupation']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian's Phone</label>
                                <input type="text" class="form-control" name="GuadianNumber" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['GuadianNumber']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Relation With Guardian</label>
                                <input type="text" class="form-control" name="Relation" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Relation']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother's Name</label>
                                <input type="text" class="form-control" name="MotherName" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['MotherName']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother's Occupation</label>
                                <input type="text" class="form-control" name="Occupation2" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Occupation2']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Permanent Address</label>
                                <input type="text" class="form-control" name="P_Address" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['P_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Post Office</label>
                                <input type="text" class="form-control" name="PostOffice" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['PostOffice']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">City</label>
                                <input type="text" class="form-control" name="City" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['City']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Zip</label>
                                <input type="text" class="form-control" name="Zip" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Zip']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">State</label>
                                <input type="text" class="form-control" name="State" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['State']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present Address</label>
                                <input type="text" class="form-control" name="C_Address" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['C_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present Post Office</label>
                                <input type="text" class="form-control" name="C_PostOffice" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['C_PostOffice']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present City</label>
                                <input type="text" class="form-control" name="C_City" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['C_City']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present Zip</label>
                                <input type="text" class="form-control" name="C_Zip" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['C_Zip']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present State</label>
                                <input type="text" class="form-control" name="C_State" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['C_State']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Name Of 10th Examination</label>
                                <input type="text" class="form-control" name="Exam10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Exam10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th YOP</label>
                                <input type="text" class="form-control" name="yop10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['yop10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Standard Percent</label>
                                <input type="text" class="form-control" name="stdMarks10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['stdMarks10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Actual Percent</label>
                                <input type="text" class="form-control" name="actMarks10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['actMarks10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Board</label>
                                <input type="text" class="form-control" name="Board10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Board10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Medium Of Study</label>
                                <input type="text" class="form-control" name="Medium10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Medium10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Maths Percent</label>
                                <input type="text" class="form-control" name="Math10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Math10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Science Percent</label>
                                <input type="text" class="form-control" name="Sci10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Sci10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Computer Percent</label>
                                <input type="text" class="form-control" name="CS10" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['CS10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Name Of 12th Examination</label>
                                <input type="text" class="form-control" name="exam12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['exam12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th YOP</label>
                                <input type="text" class="form-control" name="YOP12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['YOP12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Standard Percent</label>
                                <input type="text" class="form-control" name="StdMarks12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['StdMarks12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Actual Percent</label>
                                <input type="text" class="form-control" name="ActMarks12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['ActMarks12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Board</label>
                                <input type="text" class="form-control" name="Board12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Board12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Medium Of Study</label>
                                <input type="text" class="form-control" name="Medium12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Medium12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Maths Percent</label>
                                <input type="text" class="form-control" name="Math12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Math12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Physics Percent</label>
                                <input type="text" class="form-control" name="Phy12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Phy12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Chemistry Percent</label>
                                <input type="text" class="form-control" name="Chem12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Chem12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Computer Percent</label>
                                <input type="text" class="form-control" name="CS12" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['CS12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Entrance Exam Name</label>
                                <input type="text" class="form-control" name="bcaentrance" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['bcaentrance']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Entrance Exam Rank</label>
                                <input type="text" class="form-control" name="bcarank" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['bcarank']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Uni. Regis. No.</label>
                                <input type="text" class="form-control" name="Unireg" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Unireg']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Uni. Roll No.</label>
                                <input type="text" class="form-control" name="Uniroll" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Uniroll']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 1</label>
                                <input type="text" class="form-control" name="S1marks" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['S1marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 2</label>
                                <input type="text" class="form-control" name="S2marks" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['S2marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 3</label>
                                <input type="text" class="form-control" name="S3marks" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['S3marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 4</label>
                                <input type="text" class="form-control" name="S4marks" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['S4marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 5</label>
                                <input type="text" class="form-control" name="S5marks" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['S5marks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem Average</label>
                                <input type="text" class="form-control" name="avgSem" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['avgSem']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Any backlog</label>
                                <input type="text" class="form-control" name="backlog" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['backlog']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Backlog Subject</label>
                                <input type="text" class="form-control" name="backSub" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['backSub']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Exam</label>
                                <input type="text" class="form-control" name="DipExam" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['DipExam']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma YOP</label>
                                <input type="text" class="form-control" name="DYOP" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['DYOP']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Stream</label>
                                <input type="text" class="form-control" name="DSTREAM" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['DSTREAM']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Average</label>
                                <input type="text" class="form-control" name="Davg" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Davg']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma University</label>
                                <input type="text" class="form-control" name="DUni" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['DUni']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Year Gap</label>
                                <input type="text" class="form-control" name="Yrgap" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Yrgap']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Year Reason</label>
                                <input type="text" class="form-control" name="Reason" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['Reason']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Physical disablity</label>
                                <input type="text" class="form-control" name="PhyDisable" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['PhyDisable']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Work Experience</label>
                                <input type="text" class="form-control" name="workexp" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['workexp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">placement Assistance</label>
                                <input type="text" class="form-control" name="PAneed" id="exampleInputID1" aria-describedby="idHelp" value="{{$view['PAneed']}}">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary mb-3" name="submit" value="Update"></input>
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