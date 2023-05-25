@extends('admin/adminLayout')


@section('admin')
                <h2 class="fs-2 m-0 ">Dashboard</h2>
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

            <!-- Main Body -->
            <div class="container-fluid px-4">

                <!-- Card -->
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><span>750</span>+</h3>
                                <p class="fs-5">Students</p>
                            </div>
                            <i class="fa-solid fa-graduation-cap border primary-text fs-1 rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><span>10</span>+</h3>
                                <p class="fs-5">Courses</p>
                            </div>
                            <i class="fa-solid fa-book-open fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><span>50</span>+</h3>
                                <p class="fs-5">Mentors</p>
                            </div>
                            <i class="fa-solid fa-chalkboard-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                <!-- Card End -->

                <!-- Table -->
                <div class="row my-5">

                    <div class="d-flex justify-content-between">
                        <h3 class="fs-4 mb-3">New Admission</h3>
                        <a href="/adminad" class="btn btn-primary m-2 btn-sm">View All</a>
                    </div>

                    <div class="col">
                        <table class="table table-stripped table-hover table-light rounded shadow-sm">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Stream</th>
                                <th scope="col">View</th>
                            </tr>
                            </thead>
                            @foreach($data as $dt)
                            <tbody>
                                <tr>
                                <th scope="row">{{$dt['id']}}</th>
                                <td>{{$dt['Fname']}}</td>
                                <td>{{$dt['Lname']}}</td>
                                <td>{{$dt['Mobile']}}</td>
                                <td>{{$dt['Course']}}</td>
                                <td><a href={{"viewAdStud/".$dt['id']}}>View</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                </div>
                <!-- Table End -->
@stop