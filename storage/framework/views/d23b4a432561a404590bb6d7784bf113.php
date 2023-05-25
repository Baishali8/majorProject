

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="./CSS/facilities.css">
<style>
    .container img {
      width: 50%;

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

<div class="">
    <img src="./images/ComputerLab.jpg" class="img-fluid" alt="">
  </div>
  <div class="heading">
    <h1 class="m-5 text-center">Computer<span class="text-danger"> Laboratory</span> </h1>
    <p class=" m-5 text-center">The Computer Laboratory is the nerve center of the any technical institute. Techno India
      (Hooghly Campus) has therefore, made a huge investments in setting up and maintaining an excellent computer center
      with new age technology. The Computer Labratory offers an excellent infrastructure for imparting software and
      hardware skills to the students using latest software tools and technologies. The Institute has sophisticated,
      state-of-the-art labs, a fully networked environment Branded Computers, high performance Servers, all the required
      software (licensed); the best of printers, scanners; Standard Application packages, special statistical and
      accounting software packages, Workstations, Decision Support Systems and electronic databases. Students are
      assured of more than adequate computer time, an excellent IT environment, qualified and extremely helpful staff
      and all the necessary software support. The students can work on their assignments, prepare their presentations,
      pursue computer courses, learn new languages, keep up to date with technology, perfect their programming skills
      receive on-line training and hone their computing skills here.
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
              <img src="./images/lab1.jpeg" alt="">
            </div>

            <!-- <a href="bca.html" target="_blank" class="btn btn-primary"> <img src="images/slide-1.jpg" alt=""></a> -->
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <img src="./images/lab2.jpeg" alt="">
              <!-- <img src="images/slide-2.jpg" alt=""> -->
            </div>
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <a href="" target="_blank"><img src="images/lab3.jpeg" alt=""></a>

            </div>
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <a href="" target="_blank"> <img src="images/lab4.jpeg" alt=""></a>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/compLab.blade.php ENDPATH**/ ?>