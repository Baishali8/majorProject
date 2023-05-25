

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="./CSS/facilities.css">
<style>
    .container img {
      width: 50%;
      /* margin-right: 15px;
      padding-right: 10px; */

    }

    .heading h1::after {
      content: "";
      display: block;
      width: 130px;
      max-width: 100%;
      border-bottom: 3px solid #0A2647;
      margin: 3px auto 4px;
    }
  </style>

<div class="m-2">
    <img src="./images/canteen.png" class="img-fluid" alt="">
  </div>
  <div class="heading">
    <h1 class="m-5 text-center">College<span class="text-danger"> Canteen</span> </h1>
    <p class=" m-5 text-center">The central library, Techno India (Hooghly Campus): A gateway to knowledge resources is one of the central services to Techno India (Hooghly Campus). As a proud partner in the Institute’s march towards it’s vision, it plays a vital role in acquisition, organization and dissemination of knowledge. It has put in place policies and procedures, systems and services and the ambience that facilitate creation of new knowledge. It has an excellent collection of both print and electronic books, journals and other learning resources.

        It has adequate infrastructures to meet it’s requirements, has computerized all it’s operations using Libsys Software and provide access to the collection through on-line public access catalogue. The Central Library is well equipped with all modern facilities and resources. Techno India (Hooghly Campus) is deeply engaged to provide a world class facility to it’s users.

        All students, faculty members and employees of the institute are entitled to make use of the library facilities on taking library membership. The library besides having a huge collection of books on engineering, science and humanities offers library services through it’s various divisions.

        Central library serves the academic needs of about 600 students and nearly 30 faculty members and other staff of the institute. At present the nearly automated library is equipped with high speed servers and computers interconnected to the rest of the computers of the institute.
    </p>
  </div>



  <!-- card slider-->
  <section id="slider" class="pt-5">
    <div class="container">
      <h1> <span class="text-danger">Explore </span> Our Gallery</h1>
      <div class="slider">
        <div class="owl-carousel">
          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <img src="./images/canteen1.jpeg" width="50%" alt="abc">
            </div>

            <!-- <a href="bca.html" target="_blank" class="btn btn-primary"> <img src="images/slide-1.jpg" alt=""></a> -->
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <img src="./images/canteen2.jpeg" alt="">
              <!-- <img src="images/slide-2.jpg" alt=""> -->
            </div>


          </div>

          <div class="slider-card">
            <div class="d-flex mb-4">
              <a href="#" target="_blank"><img src="images/canteen3.jpeg" alt=""></a>

            </div>
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <a href="#" target="_blank"> <img src="images/canteen.jpg" alt=""></a>
            </div>
          </div>

          <!-- <div class="slider-card">
                  <div class="d-flex justify-content-center items-center mb-4">
                      <img src="images/slide-5.jpg" alt="">
                  </div>
                  <h5 class="text-center">HTML CSS Tutorial</h5>
                      <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesettin scrambled it to make a type specimen book.</p>
              </div>
   -->
        </div>
      </div>
    </div>
  </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/canteen.blade.php ENDPATH**/ ?>