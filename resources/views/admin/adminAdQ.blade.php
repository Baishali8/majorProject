@extends('admin/adminLayout')


@section('admin')


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
                        <h3 class="fs-4 mb-3">Total Queries</h3>
                    </div>

                    <div class="col table-responsive">
                        <table class="table table-stripped table-hover table-responsive rounded shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Query Id</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Course</th>
                                <th scope="col">View</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            @foreach($data as $dt)
                            <tbody>
                                <tr>
                                <th scope="row">{{$dt['id']}}</th>
                                <td>{{$dt['Fname']}} {{$dt['Lname']}}</td>
                                <td>{{$dt['Mobile']}}</td>
                                <td>{{$dt['Email']}}</td>
                                <td>{{$dt['course']}}</td>
                                <td><a href={{"ad-viewQ/".$dt['id']}}>View</a></td>
                                <td><a href={{"deleteAdQuery/".$dt['id']}}>Delete</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>








@stop