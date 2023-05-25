


<?php $__env->startSection('admin'); ?>


                <h2 class="fs-2 m-0 ">Fees Collection</h2>
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
                                <li><a href="ad/logout" class="dropdown-item">Logout</a></li>
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
                        <h3 class="fs-4 mb-3">Total Fees Collected</h3>
                    </div>

                    <div class="col table-responsive">
                        <table class="table table-stripped table-hover table-responsive rounded shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Student Id</th>
                                <th>Student Name</th>
                                <th>Course ID</th>
                                <th>Current Semester</th>
                                <th>Fees Amount</th>
                                <th>Paid Date</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                <td scope="row"><?php echo e($dt['StudentID']); ?></td>
                                <td><?php echo e($dt['Fname']); ?> <?php echo e($dt['Lname']); ?></td>
                                <td><?php echo e($dt['course_id']); ?></td>
                                <td><?php echo e($dt['Semester']); ?></td>
                                <td><?php echo e($dt['payableFee']); ?></td>
                                <td><?php echo e($dt['Date']); ?></td>
                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/admin/adminFees.blade.php ENDPATH**/ ?>