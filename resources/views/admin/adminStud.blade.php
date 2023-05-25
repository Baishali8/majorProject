@extends('admin/adminLayout')


@section('admin')


                <h2 class="fs-2 m-0 ">Student List</h2>
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
                        <h3 class="fs-4 mb-3">Student Information</h3>
                        <a href="/ad-stud" class="btn btn-outline-primary m-2 btn-sm">Add Students</a>
                    </div>

                    <div class="col table-responsive">
                        <table class="table table-stripped table-hover table-responsive rounded shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Full Name</th>
                                <!-- <th scope="col">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Stream</option>
                                        <option value="1">BCA</option>
                                        <option value="2">BBA</option>
                                        <option value="3">MCA</option>
                                    </select>
                                </th> -->
                                <th scope="col">University Roll</th>
                                <!-- <th scope="col">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Stream
                                    </span>
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" type="button">BCA</button></li>
                                        <li><button class="dropdown-item" type="button">MCA</button></li>
                                        <li><button class="dropdown-item" type="button">BBA</button></li>
                                    </ul>
                                </div> -->
                                </th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">View</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>
                                </tr>
                            </thead>
                            @foreach($data as $dt)
                            <tbody>
                                <tr>
                                <td scope="row">{{$dt['id']}}</td>
                                <td>{{$dt['Fname']}}</td>
                                <td>{{$dt['Uniroll']}}</td>
                                <td>{{$dt['Phone']}}</td>
                                <td>{{$dt['Email']}}</td>
                                <td><a href={{"adstudpview/".$dt['id']}}>View</a></td>
                                <td><a href={{"deleteAdStudPortal/".$dt['id']}}>Delete</a></td>
                                <td><a href={{"adStudPortalUp/".$dt['id']}}>Update</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>








@stop