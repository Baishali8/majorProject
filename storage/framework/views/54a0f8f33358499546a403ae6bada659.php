<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno India Hooghly</title>

    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">

    <!-- Bootsttrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FontAwesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="./CSS/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min css"integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" /> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./CSS/layout.css">
    
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
                                <li><a href="lab">Computer Laboratories</a></li>
                                <li><a href="lib">Central Library</a></li>
                                <li><a href="sturom">Study Room</a></li>
                                <li><a href="comroom">Common Room</a></li>
                                <li><a href="canteen">College Canteen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="placement">Placements</a></li>
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

<?php echo $__env->yieldContent('content'); ?>



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
<?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/layout.blade.php ENDPATH**/ ?>