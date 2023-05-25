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
                    

                    <h2 class="fs-2 m-0 ">Queries Listed</h2>
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
                        <h3 class="fs-4 mb-3">View Query</h3>
                        <a href="/ad-query" class="btn btn-primary m-2 btn-sm">Go Back</a>
                    </div>

                    <div class="">
                        <form class="row">
                            @csrf
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputID1" class="form-label fw-bold">Query ID</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputID1" aria-describedby="idHelp" value="{{$data['id']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputName1" class="form-label fw-bold">Student Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputName1" aria-describedby="nameHelp" value="{{$data['Fname']}} {{$data['Lname']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputName1" class="form-label fw-bold">Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputName1" aria-describedby="nameHelp" value="{{$data['Mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['Email']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Course</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['course']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Date of Birth</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['DOB']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Current Address</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['C_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Permanent Address</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['P_Address']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">City</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['city']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">State</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['State']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">ZIP Code</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['zip']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Nationality</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['nationality']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Gender</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['gender']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Father Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['father']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Father Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['f_occupation']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Father Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['f_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Mother Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['mother']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Mother Occupation</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['m_occupation']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Mother Mobile Number</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['m_mobile']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">10th School Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['school10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">10th Board Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['board10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">10th YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['yop10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">10th Total Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['marks10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">10th Total Percentage</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['percent10']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">12th School Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['school12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">12th Board Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['board12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">12th YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['yop12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">12th Total Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['marks12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">12th Total Percentage</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['percent12']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">maths or CS</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['mathsComp']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Graduation Institute Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['college']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Graduation University Name</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['university']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Graduation YOP</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['gradYop']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Graduation Marks</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['gradMarks']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Stream</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['gradStream']}}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">maths or CS</label>
                                <input type="text" class="form-control-plaintext" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['math']}}">
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