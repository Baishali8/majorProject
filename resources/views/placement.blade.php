<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training & Placement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bca.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/layout.css">
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

/**** Placement CSS Starts ****/

.center {
    margin-left: auto;
    margin-right: auto;
}

table{
width: 700px;
box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);
}

table, td, th{
padding: 5px;
border: 1px solid black;
border-collapse: collapse;
text-align: center;
cursor: pointer;
}

th{
font-size: 20px;
}

td{
font-size: 18px;
}

th{
background-color: rgb(247, 39, 39);
color: white;
}

tr:nth-child(odd){
background-color: rgb(248, 155, 155);
}

tr:nth-child(odd):hover{
background-color: rgb(238, 83, 83);
color: white;
transform: scale(1.1);
transition: transform 300ms ease-in;
}

tr:nth-child(even){
background-color: #ededed;
}

tr:nth-child(even):hover{
background-color: darkgray;
transform: scale(1.1);
transition: transform 300ms ease-in;
}

/**** Placement CSS Ends ****/

/********** Recruiter List Starts **********/  
.recruiter-head-style{
  font-size: 28px;
  color: #4b4848;
  margin-bottom: 5px;
}
.recruiter-marquee{
  height: 100px;
}
.recruiter-marquee img{
  height:80px;
  width:140px;
}
/********** Recruiter List Ends **********/

/********** Testimonial CSS Starts **********/  
.tetimonial {
  width: 340px;
  background: white;
  border: 1px solid rgb(0 0 0/10%);
  padding: 35px 15px;
  float: left;
  margin-right:10px;
}
.tetimonial img {
  /* padding: 5px; */
  width: 100px;
  border-radius:50px;
}
.tetimonial-user {
  padding-left: 15px;
  padding-top: 5px;
}
.tetimonial-user h4 {
  font-size: 16px;
  color: black;
  margin-bottom: 5px;
}
.tetimonial-user p {
  color: #818385;
  font-size: 12px;
}
.tetimonial .fa-quote-right {
  font-size:40px;
  margin-top: 5px;
  color:rgb(243, 74, 74);
}
.testimonial-comment {
  width: 100%;
  float: left;
  margin-top: 5px;
}
.testimonial-comment h4 {
  color: rgb(243, 74, 74);
  font-size: 20px;
  margin-bottom:15px;
}
.testimonial-comment p {
  font-size: 0.7rem;
  margin-bottom:20px;
  ;
  line-height: 25px;
  color:#1f2836;
}
.testimonial-comment i {
  color:#ff5722;
  font-size:18px;
}
/********** Testimonial CSS Ends **********/
  </style>
</head>

<body>
<!-- Top Header -->

<header>
        <div class="top-nav">
            <a href="home" class="logo"><img src="./images/logo.jpg" alt="logo"></a>
            <div class="logo-brand">
                <h1 class="h1-logo">Techno India Hooghly</h1>
                <h2 class="h2-logo">A Technical Management College Under Techno India Group</h2>
                <h2 class="h2-logo">Affiliated To Makaut, WB formerly known as WBUT. Approved by AICTE and Accredited by
                    TCS</h2>
            </div>
            <div class="portal">
                <a href="/studLog"><i class="fa-solid fa-user"></i><span>&nbsp;Student Portal</span></a>
                <a href="/adlog"><i class="fa-solid fa-lock"></i><span>&nbsp;Admin Portal</span></a>
            </div>
        </div>
        <!-- Top Header End -->


        <!-- Main Nav -->
        <span id="menu-bar"><i class="fa-solid fa-bars"></i></span>
        <div class="main-nav" id="top">
            <nav class="nav justify-content-center">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="academics">Academics</a></li>
                    <li><a href="admission">Admission</a></li>
                    <li><a href="#">Facilities <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="sub-menu-1">
                            <ul class="dropdown">
                                <li><a href="facility">Computer Laboratories</a></li>
                                <li><a href="facility">Central Library</a></li>
                                <li><a href="facility">Common Room</a></li>
                                <li><a href="facility">College Canteen</a></li>
                                <li><a href="facility">Career Oportunity</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Placements</a></li>
                    <li><a href="#">Life at TCH <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="sub-menu-1">
                            <ul class="dropdown">
                                <li><a href="https://www.facebook.com/TIHVerbenaCommittee/" target="_blank">Verbena Commitee</a></li>
                                <li><a href="https://www.facebook.com/TIHSparkQuest/" target="_blank">Spark Quest</a></li>
                                <li><a href="https://www.facebook.com/CodechefTCHChapter/" target="_blank">CodeChef TCH-Chapter</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="campus">Campus Tour</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <!-- Main Nav End -->
    </header>

    <!-- Header End -->



    <div class="container-fluid my-5">
        <h1 class="text-center fw-bold display-1 mb-5"><u>Training <span class="text-danger">& Placement</span></u></h1>
        <p class=" m-5 text-center">Career planning and placement is the backbone of Techno India (Hooghly Campus). From the very beginning, the institute has laid great emphasis on giving its students the most appropriate industrial training and ensured that all its students are successfully placed. Career planning and placement are the two most important areas of our concern. The placement Assistance cell also arranges regular industry interaction.
                </p>
        <p class=" m-5 text-center">The institute is working in close collaboration with industries in and around Kolkata and in other areas of West Bengal and other states. Techno India (Hooghly Campus) Campus regularly invites guest professors from various institutes and industries to deliver lectures on diverse topics of IT & Management. It also undertakes various research projects to cater to the changing and growing requirements of the Industry. 
                </p>
        <p class=" m-5 text-center">Techno India (Hooghly Campus) envisages to set up a pre-placement grooming cell as a core strength which will help its students tremendously to keep pace with all emerging needs demanded at their work place. Actually, one needs to have the right mix of academic, technical and behavioural skills to be reckoned as a deserving candidates. And here lies the necessity of such a programme in which due attention is paid to the student's overall soft skill, personality and other professional competencies that make him or her more acceptable to the employer. 
                </p>
        <p class=" m-5 text-center">Techno India (Hooghly Campus) is set to introduce a number of programms that aim at all-round personal, physical and professional developments of a student. It will train the students to sport an attitude through self confidence and focus. All this programme together with classroom training will make the students dedicated, determined and goal centric.
                </p>

  <!---------- Placement HTML Starts --------->
  <div class="width-100 placement">
    <div class="container">
       <div class="width-50">
          <div class="placement-sect mt-50">
            <h1 class="m-5 fw-bold text-center"><u>Companies that <span class="text-danger"> Hire Our Students </span></u> </h1>   
          </div>
       <div class="width-50">
       </div>
    </div>
  </div>
    <table class="center">
        <tr>
            <th>SL.NO.</th>
            <th>COMPANY NAME</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Tata Consultancy Services</td>
          </tr>
            <td>2</td>
            <td>SAP Labs</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Cognizant Technology Solution</td>
          </tr>
        </tr>
        <tr>
          <td>4</td>
          <td>Tech Mahindra</td>
        </tr>
      <tr>
        <td>5</td>
        <td>Infosys</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Mphasis</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Persistent Systems</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Zycus</td>
      </tr>
      <tr>
        <td>9</td>
        <td>GeoTech</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Perennation Computer Solutions Global Private Limited (PCS Global)</td>
      </tr>
      <tr>
        <td>11</td>
        <td>L&T Infotech</td>
      </tr>
      <tr>
        <td>12</td>
        <td>NEC Technologies</td>
      </tr>
      <tr>
        <td>13</td>
        <td>iGate Patni</td>
      </tr>
      <tr>
        <td>14</td>
        <td>IBM GPS</td>
      </tr>
      <tr>
        <td>15</td>
        <td>IBM India-GBS</td>
      </tr>
      <tr>
        <td>16</td>
        <td>Accenture</td>
      </tr>
      <tr>
        <td>17</td>
        <td>Johnson Controls India</td>
      </tr>
      <tr>
        <td>18</td>
        <td>Wipro Technologies Ltd.</td>
      </tr>
      <tr>
        <td>19</td>
        <td>IBS Software Services Pvt. Ltd.</td>
      </tr>
      <tr>
        <td>20</td>
        <td>RS Software</td>
      </tr>
      <tr>
        <td>21</td>
        <td>Delgence Technologies</td>
      </tr>
      <tr>
        <td>22</td>
        <td>AMDOCS</td>
      </tr>
      <tr>
        <td>23</td>
        <td>Xentric Technologies Pvt Limited</td>
      </tr>
      <tr>
        <td>24</td>
        <td>Global IDs</td>
      </tr>
      <tr>
        <td>25</td>
        <td>Godrej</td>
      </tr>
      <tr>
        <td>26</td>
        <td>Innofied</td>
      </tr>
      <tr>
        <td>27</td>
        <td>FusionCharts</td>
      </tr>
      <tr>
        <td>28</td>
        <td>Albatross Software Services Pvt. Ltd</td>
      </tr>
      <tr>
        <td>29</td>
        <td>Capgemini</td>
      </tr>
      <tr>
        <td>30</td>
        <td>Maintec Technologies</td>
      </tr>
      <tr>
        <td>31</td>
        <td>Amazon</td>
      </tr>
      <tr>
        <td>32</td>
        <td>Club Mahindra</td>
      </tr>
      <tr>
        <td>33</td>
        <td>HDFC</td>
      </tr>
      <tr>
        <td>34</td>
        <td>British Paints</td>
      </tr>
      <tr>
        <td>35</td>
        <td>Concierge Technologies Pvt. Ltd (CTPL)</td>
      </tr>
      <tr>
        <td>36</td>
        <td>ICICI</td>
      </tr>
      <tr>
        <td>37</td>
        <td>Kovair Software Pvt. Ltd</td>
      </tr>
      <tr>
        <td>38</td>
        <td>ATOS India Pvt. Ltd.</td>
      </tr>
      <tr>
        <td>39</td>
        <td>L&T Projects</td>
      </tr>
      <tr>
        <td>40</td>
        <td>HCL</td>
      </tr>
      <tr>
        <td>41</td>
        <td>AMDOCS</td>
      </tr>
      <tr>
        <td>42</td>
        <td>Syntel</td>
      </tr>
    </table>
    
  <!---------- Placement HTML Ends --------->     
  
  <!---------- Recruiter List HTML Starts --------->
<div class="width-100 margin-top-50">
    <div class="container">
        <h1 class="m-5 fw-bold text-center"><u>Our <span class="text-danger"> Top Recruiters </span></u> </h1>
       <marquee class="recruiter-marquee">
          <img src="./images/placements/infosys.jpg">
          <img src="./images/placements/Tata.jpeg">
          <img src="./images/placements/IBM.jpg">
          <img src="./images/placements/accenture.jpg">
          <img src="./images/placements/capgemini.jpeg">
          <img src="./images/placements/wipro.jpg">
          <img src="./images/placements/iGATE-Patni.jpg">
          <img src="./images/placements/L&T.jpg">
          <img src="./images/placements/syntel.jpg">
          <img src="./images/placements/cognizant.jpg">
          <img src="./images/placements/SAP.jpg">
          <img src="./images/placements/Persistent.jpg">
          <img src="./images/placements/amazon.jpg">
          <img src="./images/placements/ICICI.jpg">
          <img src="./images/placements/godrej.jpg">
          <img src="./images/placements/amdocs.jpg">
          <img src="./images/placements/Club_Mahindra.jpg">
          <img src="./images/placements/johnson controls.jpg">
       </marquee>
    </div>
  </div>
  <!---------- Recruiter List HTML Ends --------->

  <!---------- Career Counselling HTML Starts --------->
  <div class="container d-flex justify-content-between mb-5">
    <img src="./images/placements/Career_Counselling.jpg" class="img-fluid " alt="">
    <div class="accordion w-50" id="accordionExample">
        <div class="accordion-item"> 
            <h1 class="m-5 fw-bold text-center">Career <span class="text-danger"> Counselling </span> </h1>
            <p class=" m-5 text-center"> Career Counselling is a lifelong process since the individual choose an occupation, prepare for it, and make progress in it. Career Counselling has to do with knowing the interest of the candidate, selection of their subject, formation of their study habit and make them progress in those subject and activities and attain the ultimate aim of getting good career as per their wish. It is concerned primarily with helping the individual to make decisions and choices involved in planning for future and to form career decisions and choice necessary in affecting career adjustment.
              </p>
            <p class=" m-5 text-center">The institute runs the Career Counselling Cell for providing guidance and counselling to the students regarding various traditional and Job-oriented courses, different kinds of pre-admission and competitive examinations, available job-opportunities, current market trends and employability in public and private sectors. Besides above guidance, the objective of the Cell is to work as a platform of support-service for the students in developing their soft skills, communication ability and personality development, and confidence to perform better, so that they may face the challenge and rigours of competitive examinations and on-job-training in add-on or vocational courses comfortably and without any stress.
              </p>
              </div>
              </div>
              </div>
<!---------- Career Counselling HTML Ends --------->

<!---------- Testimonial HTML Starts --------->
<div class="main-section bg-grey">
    <div class="container">
        <h1 class="m-5 fw-bold text-center"><u>Meet <span class="text-danger"> Our Teachers </span></u> </h1> 
       <marquee direction="left"  height="400" scrollamount="5">
          <div  class="tetimonial">
             <div class="width-100">
                <div class=""> <img src="./images/placements/hod.jpg"> </div>
                <div class="width-60">
                   <div class="tetimonial-user">
                      <h4><strong>Subhrata Saha</strong></h4>
                      <p>HOD BCA Department</p>
                   </div>
                </div>
                <div class="width-20"> <i class="fa fa-quote-right"></i> </DIV>
             </div>
             <div class="testimonial-comment">
                <h4 class="size">...........</h4>
                <p class="paragraph1"> Lorem Ipsum is simply dummy text of the print<br>
                   and typesetting industry.Lorem Ipsum has been<br>
                   the industry's standard dummy text ever since<br>
                   the 1500s, when an unknown printer a galley.
                </p>
             </div>
          </div>
          <div  class="tetimonial">
             <div class="width-100">
                <div class=""> <img src="./images/placements/avikSir.jpg"> </div>
                <div class="width-60">
                   <div class="tetimonial-user">
                      <h4><strong>Avik Chatterjee</strong></h4>
                      <p>HOD BBA Department</p>
                   </div>
                </div>
                <div class="width-20"> <i class="fa fa-quote-right"></i> </DIV>
             </div>
             <div class="testimonial-comment">
                <h4 class="size">..........</h4>
                <p class="paragraph1"> Lorem Ipsum is simply dummy text of the print<br>
                   and typesetting industry.Lorem Ipsum has been<br>
                   the industry's standard dummy text ever since<br>
                   the 1500s, when an unknown printer a galley.
                </p> 
             </div>
          </div>
          <div  class="tetimonial">
             <div class="width-100">
                <div class=""> <img src="./images/placements/anikSir.jpg"> </div>
                <div class="width-60">
                   <div class="tetimonial-user">
                      <h4><strong>Anik Patra</strong></h4>
                      <p>Placement Officer</p>
                   </div>
                </div>
                <div class="width-20"> <i class="fa fa-quote-right"></i> </DIV>
             </div>
             <div class="testimonial-comment">
                <h4 class="size">..........</h4>
                <p class="paragraph1"> Lorem Ipsum is simply dummy text of the print<br>
                   and typesetting industry.Lorem Ipsum has been<br>
                   the industry's standard dummy text ever since<br>
                   the 1500s, when an unknown printer a galley.
                </p>
             </div>
          </div>
       </marquee>
    </div>
  </div>
  
  <!---------- Testimonial HTML Ends --------->

  </div>
  </div>


  <!-- Footer -->
  <footer class="footer">
            <div class="container"> 
                <div class="address">
                    <h2>Techno India Hooghly</h2>
                    <div>
                        <p><i class="fa-solid fa-phone"></i> <span>Phone:</span> (033) 2680 2389</p>
                        <p><i class="fa-solid fa-envelope"></i> <span>Email:</span> technohooghly@gmail.com</p>
                        <p><i class="fa-solid fa-location-dot"></i> <span>Address:</span> Grand Trunk Road Near Khadina More, Dharampur, Chinsurah R S, Chinsurah, West Bengal 712101</p>
                    </div>
                </div>
                <div class="map">
                    <h2>Location On Map</h2>
                    <div class="iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5902933229854!2d88.37954111488816!3d22.891588485019568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89167529a8f17%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1676270099963!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="social">
                    <h2>Our Social Handles</h2>
                    <div>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <h4>Copyright &#169;2023, Created By Baishali Dutta, Diya Shee, Ankan Saha, Abhinaba Koley, Rimi Das.</h4>
            </div>
        </footer>
        <!-- Footer End -->
    
    
    
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- BootStrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        
        <!-- JQuery -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

        <!-- Owl Carousel JS -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script> -->
    
        <!-- Custom Js -->
        <script src="./JS/script.js"></script>
        <script src="./JS/owl.carousel.min.js"></script>
        <script src="./JS/academics.js"></script>

</body>
</html>             
