


<?php $__env->startSection('admin'); ?>


                <h2 class="fs-2 m-0 ">Courses Offered</h2>
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
                        <h3 class="fs-4 mb-3">Courses</h3>
                        <button class="btn btn-outline-primary m-2 btn-sm">Add Course</button>
                    </div>

                    <div class="col table-responsive">
                        <table class="table table-stripped table-hover table-responsive rounded shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Course Id</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Fees Per Semesters</th>
                                <th scope="col">Admission Fee</th>
                                <th scope="col">Total Fees</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($dt['id']); ?></td>
                                    <td><?php echo e($dt['course_name']); ?></td>
                                    <td><?php echo e($dt['sem_fee']); ?></td>
                                    <td><?php echo e($dt['admission_fee']); ?></td>
                                    <td><?php echo e($dt['total']); ?></td>
                                    <td><a href="#">Delete</a></td>
                                    <td><a href="#">Update</a></td>
                                </tr>
                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/admin/adminCourse.blade.php ENDPATH**/ ?>