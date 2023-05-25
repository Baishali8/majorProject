@extends ('layout')
@section ('content')

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
        <img src="./images/bca1.PNG" class="img-fluid w-100" alt="">
    </div>
    <div class="heading">
        <h1 class="m-5 text-center">Master's In <span class="text-danger"> Computer Science </span> </h1>
        <p class=" m-5 text-center">M.Sc in Computer Science (M.Sc. CS) is a two year full-time regular Post Gradguate course in Information Scicnce.

            Computer Science architecture is an integrated framework for acquiring and evolving IT to achieve strategic goals. It has both logical and technical components. Logical components include mission, functional and information requirements, system configurations, and information flows. Technical components include IT standards and rules that will be used to implement the logical architecture. It’s a convenient term for including both telephony that is driving what has often been called “the information revolution.” 
            
            The M.Sc. (CS) program is aimed at designing and implementing advanced traditional computing environment. CS architecture is an integrated framework for acquiring and evolving CS to achieve strategic goals. It has both 'logical' and 'technical' components. The logical components include mission, functional and informational requirements, system configurations, and information flows. The technical components include CS standards and rules that will be used to implement the logical architecture. It therefore includes both computing and communication network  technology in the same world.
        </p>
    </div>
    <div class="container d-flex justify-content-between mb-5">
        <img src="./images/MSc-Computer-Science.jpg" class="img-fluid " alt="">
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
                        <h4>PostGraduate Program </h4>
                        <p data-bs-toggle="modal" data-bs-target="#exampleModalmsc">2 years master degree</p>
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
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalsyl"> M.Sc Syllabus</a>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalmsc" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                        <p>Eligibility:: A pass in the 10 + 2 or equivalent examination with Mathematics, Computer
                            Scicnce or Computer Application</p>

                        <p>State:: West Bengal</p>
                        <p>Country:: India</p>
                        Apply Now::<a href="admission"> Click here to apply! </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Techno India Hooghly(Campus)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <p> Admission Step!!!!!</p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalsyl" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Techno India Hooghly(Campus)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <a href="./images/pdf/MSC.pdf"> Click Here to Download!</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
  @stop