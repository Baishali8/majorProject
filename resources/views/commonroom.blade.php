@extends('layout')

@section('content')
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
    <img src="./images/Commonroom.png" class="img-fluid" alt="">
  </div>
  <div class="heading">
    <h1 class="m-5 text-center">Common<span class="text-danger"> Room</span> </h1>
    <p class=" m-5 text-center">Our College common room is a place where students take rest, read newspapers and play indoor games. It is important for the student of any school. It is used for various purposes. Students come here, read newspapers and play games. They also discuss about many things here. Thus, they can enrich their knowledge. A common room keeps a school always fresh, live and cheerful. Our school has a big common room. There are chairs, tables and benches for the students. Newspapers, journals, and magazines are available here. In the leisure period, students play caroms, table tennis, chess etc. If there is no common room in any school, students pass their leisure time moving here and there. Having a common room, students of our school can proper use the time. Thus, it gives us pleasure and recreation. A school common room plays a vital role removing the monotony of the students. It is essential for the students. It is a part and parcel of our school life.
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
              <img src="./images/common3.jpg" alt="">
              <!-- <img src="images/slide-2.jpg" alt=""> -->
            </div>


          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <img src="./images/common1.jpg" alt="">

            </div>
          </div>

          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <img src="./images/common2.jpg" alt="">
            </div>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center items-center mb-4">
              <img src="./images/common4.jpg" alt="">
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


@stop
