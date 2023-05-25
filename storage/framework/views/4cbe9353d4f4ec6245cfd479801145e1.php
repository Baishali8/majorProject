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
                        <?php if(Session::get('user')): ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbar-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user me-2"></i><span><?php echo e(Session::get('user')); ?></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-item">Profile</a></li>
                                <li><a href="#" class="dropdown-item">Settings</a></li>
                                <li><a href="/adlogout" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
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
                        <form class="row">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Student ID</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['id']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Fname']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Blood Group</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['BloodGroup']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Date of Birth</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['DOB']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Gender</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Gender']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Phone']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Alt. Phone Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['AltPhone']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Email']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Alt. Email</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['AltEmail']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Aadhar Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Aadhar']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Pan Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Pan']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Passport Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Passport']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Father's Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['FatherName']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian's Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['GuadianName']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Occupation']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Guardian's Phone</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['GuadianNumber']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Relation With Guardian</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Relation']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother's Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['MotherName']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Mother's Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Occupation2']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Permanent Address</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['P_Address']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Post Office</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['PostOffice']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">City</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['City']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Zip</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Zip']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">State</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['State']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present Address</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['C_Address']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present Post Office</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['C_PostOffice']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present City</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['C_City']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present Zip</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['C_Zip']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Present State</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['C_State']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Name Of 10th Examination</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Exam10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['yop10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Standard Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['stdMarks10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Actual Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['actMarks10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Board</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Board10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Medium Of Study</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Medium10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Maths Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Math10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Science Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Sci10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">10th Computer Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['CS10']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Name Of 12th Examination</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['exam12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['YOP12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Standard Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['StdMarks12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Actual Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['ActMarks12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Board</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Board12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Medium Of Study</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Medium12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Maths Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Math12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Physics Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Phy12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Chemistry Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Chem12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">12th Computer Percent</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['CS12']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Entrance Exam Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['bcaentrance']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Entrance Exam Rank</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['bcarank']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Uni. Regis. No.</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Unireg']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Uni. Roll No.</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Uniroll']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 1</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['S1marks']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 2</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['S2marks']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 3</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['S3marks']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 4</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['S4marks']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem 5</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['S5marks']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Sem Average</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['avgSem']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Any backlog</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['backlog']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Backlog Subject</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['backSub']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Exam</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['DipExam']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['DYOP']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Stream</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['DSTREAM']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma Average</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Davg']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Diploma University</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['DUni']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Year Gap</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Yrgap']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Year Reason</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['Reason']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Physical disablity</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['PhyDisable']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Work Experience</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['workexp']); ?>">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">placement Assistance</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="<?php echo e($view['PAneed']); ?>">
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
</html><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/admin/adminStudView.blade.php ENDPATH**/ ?>