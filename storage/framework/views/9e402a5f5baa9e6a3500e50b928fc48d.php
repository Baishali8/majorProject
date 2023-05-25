
<?php $__env->startSection('content'); ?>
    <style>
        .container img {
            width: 50%;
            margin-right: 15px;
            padding-right: 10px;

        }

        .heading h1::after {
            content: "";
            display: block;
            width: 130px;
            max-width: 100%;
            border-bottom: 3px solid #0A2647;
            margin: 3px auto 4px;
        }
        p{
            text-transform: none;  
        }
        
    </style>



    <div class="mb-2">
        <img src="./images/bba2.PNG" class="img-fluid w-100" alt="">
    </div>
    <div class="heading">
        <h1 class="m-5 text-center">Bachelor Of <span class="text-danger"> Business Administration </span> </h1>
        <p class=" m-5 text-center">The Bachelor of Business Administration BBA program is a three year full-time regular degree course in Business Administration directed at preparing participants for the challenges of supervisory and middle level-management positions in industry of the public sector. The program blends in three core disciplines of management, communication andapplications of Information Technologies like Data Science, Business Intelligence along with subject like Social Media management, Digital Marketing. In addition to the program offers general business courses to broaden the prospective manager's knowledge base. The program is designed to impart management skills along with latest communication skills. After completion of the course, candidates are eligible to take key roles in the management category. Business Management is primarily about running a business or organization with competence and the study of management involves learning how to assemble people to achieve desired objectives optimizing resources at hand in a proficient manner. Management constitutes Planning, Organizing, Staffing, Leading or Directing and running an organization for attaining a specific goal. An aspirant of Business Management can opt for specialization in Marketing, Finance, Human Resource, Financial Accounting and Systems, Finance Services.
        </p>
    </div>
    <div class="container d-flex justify-content-between mb-5">
        <img src="./images/IT.png" class="img-fluid " alt="">
        <div class="accordion w-50" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Courses We Offer
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h4>After Class 12</h4>
                        <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalbba">3 Years BBA</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Admission Procedure
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalmsc"> Step1: Go to the Admission panel</p><br>
                        <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalmsc"> Step2: Filled form in admission</p><br>
                        <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalmsc"> Step3: Submit admission fees </p><br>
                        <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalmsc"> Step4: Your admission will start processing.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Syllabus
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalsyllabus"> BBA
                            Syllabus</h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalbba" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Techno India Hooghly(Campus)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Course Details</p>
                        <p>Duration of Course:: Three Years Full-time Course</p>
                        <p>Medium of Instruction:: The medium of instruction is English</p>
                        <p>Eligibility:: A pass in the 10 + 2 or equivalent examination with English</p>

                        <p>State:: West Bengal</p>
                        <p>Country:: India</p>
                        Apply Now::<a href="admission"> Click here to apply! </a> <!--admission form link-->
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalsyllabus" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Techno India Hooghly(Campus)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <a href="./images/pdf/BBA.pdf"> Click Here to Download!</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/BBA.blade.php ENDPATH**/ ?>