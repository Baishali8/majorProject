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
        <img src="./images/MCA.jpg" class="img-fluid w-100" alt="">
    </div>
    <div class="heading">
        <h1 class="m-5 text-center">Master's Of <span class="text-danger"> Computer Application </span> </h1>
        <p class=" m-5 text-center">Master's of Computer Applications BCA is a three year full-time regular degree
            course in Computer Application. BCA course is very popular with the students community because of its
            unique and most advanced curriculum which has been designed exhaustively and has been
            up-dated on the basis of national workshops of reputed experts, conducted by the university. The
            BCA course has been considered unique among the entire BCA course being conducted at other
            Universities in India.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt voluptate explicabo facilis eos laudantium
            nisi saepe aperiam nihil modi delectus quidem numquam illum nostrum consectetur hic magnam temporibus quas
            qui eveniet perspiciatis deleniti, magni nobis, assumenda molestias? Facere laboriosam mollitia laudantium
            eaque numquam, quaerat harum voluptas! Sint assumenda explicabo ipsum quisquam laboriosam rem aperiam magni
            consequuntur molestias itaque cupiditate, tenetur quam? Obcaecati illum commodi doloribus eos beatae iste
            totam neque nesciunt error eius voluptates, iure cupiditate ad repellendus earum dolore.
        </p>
    </div>
    <div class="container d-flex justify-content-between mb-5">
        <img src="./images/eng.jpg" class="img-fluid " alt="">
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
                        <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalmca">2 Years MCA </p>
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
                        <p class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalsyl"> MCA Syllabus</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalmca" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Techno India Hooghly(Campus)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Course Details</p> 
                       <p>Duration of Course:: Two Years Full-time AICTE APPROVED & MAKAUT, WB AFFILIATED Course</p> 
                       <p>Medium of  Instruction:: The medium of instruction is English</p> 
                       <p>Eligibility::	Students aspiring for the course at Techno India Hooghly Campus must have Graduation or equal degree in any discipline from UGC recognized university/ Institute or BE/ B.Tech/ BCA from any AICTE recognized university or institute. Applicant must have Mathematics as compulsory subject in graduation.</p> 
                       <p>Seats:: 60</p>
                       <p>State:: West Bengal</p>
                       <p>Country:: India</p>
                       Apply Now::<a href="admission"> Click here to apply! </a>
                   </div>
                       
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalmca" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Techno India Hooghly(Campus)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       Admission step:
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
                        <a href="./images/pdf/MCA.pdf"> Click Here to Download!</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


@stop