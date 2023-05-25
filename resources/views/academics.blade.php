@extends('layout')

@section('content')

<link rel="stylesheet" href="./CSS/academics.css">

<!-- carousel  -->


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="./images/academics1.png" class="d-block w-100 c-img" alt="...">

      </div>
      <div class="carousel-item c-item">
        <img src="./images/academics2.png" class="d-block w-100 c-img" alt="...">

      </div>
      <div class="carousel-item c-item">
        <img src="./images/academics3.png" class="d-block w-100 c-img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousel end -->

  <!-- card slider-->
  <section id="slider" class="pt-5">
    <div class="container">
      <h1> <span class="text-danger">Explore </span> Our Courses</h1>
      <div class="slider">
        <div class="owl-carousel">
          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <a href="bca"> <img src="images/Information-Technology.png" alt=""></a>
            </div>
            <h5 class="text-center">BCA(Bachelor Of Computer Application)</h5>
            <p class="text-center"> Tap the image for the further details</p>
            <!-- <a href="bca.html" target="_blank" class="btn btn-primary"> <img src="images/slide-1.jpg" alt=""></a> -->
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <a href="bba"> <img src="images/none.jpg" alt=""></a>
              <!-- <img src="images/slide-2.jpg" alt=""> -->
            </div>
            <h5 class="text-center">BBA(Bachelor Of Business Administration)</h5>
            <p class="text-center">Tap the image for the further details</p>

          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <a href="mca"><img src="images/MSc-Computer-Science.jpg" alt=""></a>
              
            </div>
            <h5 class="text-center">MCA (Master Of Computer Application)</h5>
            <p class="text-center">Tap the image for the further details.</p>
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
            <a href="msc"> <img src="images/IT.png" alt=""></a>
            </div>
            <h5 class="text-center"> M.Sc in Computer Science</h5>
            <p class="text-center">Tap the image for the further details.</p>
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

@stop 