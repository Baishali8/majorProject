<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="./CSS/studPortal.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- THIS PART GOES TO NAVBAR -->
    <!-- <header> -->
        <!-- <header>
            <div class="logo">
                <p>Techno</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </nav>
            <button><a href="#">Get Started</a></button>
        </header> -->
        <header>
            <span id="menu-bar"><i class="fa-solid fa-bars"></i></span>
            <div class="main-nav" id="top">
                <nav class="nav justify-content-center">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Important Links</a>
                            <div class="sub-menu-1">
                                <ul class="dropdown">
                                    <li><a href="#">NPTEL Spoken English</a></li>
                                    <!-- <li><a href="#">Central Library</a></li>
                                    <li><a href="#">Common Room</a></li>
                                    <li><a href="#">College Canteen</a></li>
                                    <li><a href="#">Career Oportunity</a></li> -->
                                </ul>
                            </div> 
                        </li>
                        <li><a href="#">About Us <i class="fa-solid fa-chevron-down"></i></a>
                            <div class="sub-menu-1">
                                <ul class="dropdown">
                                    <li><a href="#">About TIH</a></li>
                                    <li><a href="#">About TIG</a></li>
                                    <!-- <li><a href="#">Central Library</a></li> -->
                                    <li><a href="#">About Developer</a></li>
                                    <!-- <li><a href="#">Career Oportunity</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                        <!-- <li><a href="#">Life at TCH <i class="fa-solid fa-chevron-down"></i></a>
                            <div class="sub-menu-1">
                                <ul class="dropdown">
                                    <li><a href="#">Verbena Commitee</a></li>
                                    <li><a href="#">Spark Quest</a></li>
                                    <li><a href="#">CodeChef TCH-Chapter</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Campus Tour</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li> -->
                    </ul>
                </nav>
            </div>
        </header>
        <!---- <ul>
            <li><a href="#"
                class="active-btn">Home</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Important Links</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul> -->
        <!-- <a href="#" class="logo"><i class="ri-home-fill"></i><span>Logo</span></a>
        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <div class="main">
            <a href="#" class="user"><i class="ri-shield-user-fill"></i>Student</a>
            <a href="#">Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div> -->
    </header>
    <!-- <div class="bgimg1">
        < <div class="caption">
            <span class="border">Techno India Hooghly</span>
        </div> -->
    <!-- </div> --> 
    <div class="bg-light">
        <h3>Welcome to Techno India Hooghly Student's Portal</h3>
        <p>This portal is designed to automate the registration process at the Portal of Techno India Hooghly. Students are required to visit the portal when required to update there profile and for the latest news updates. The date for opening and closing of this portal will be published on the notice board to inform the students about the portal.</p>
    </div>
    <div class="bgimg2">
        <div class="caption">
            <span class="border">Attention!!
            </span>
            <!-- <span class="border">This is Mandatory for everyone.
            </span> -->
            <div class="bg-blue">
                This is Mandatory for everyone.
            </div>
        </div>
    </div>
    <div style="position:relative;">
        <div class="bg-dark">
            <h3 class="light-text">Log in and Registration Panel</h3>
            <form action="/login" method="post">
                <?php echo csrf_field(); ?> 
                <label for="Uno">Student ID</label><br>
                <input type="text" id="Student_ID" name="Student_ID"><br>
                <label for="Password">Password</label><br>
                <input type="Password" id="Password" name="Password"><br>
                <div class="fpass">
                    Forgot?<a href="#">Retreve Here</a>
                </div>
                <button type="submit">Submit</button>
                <div class="signup">
                    Not a member? <a href="/studReg">SignUp</a>
                </div>
            </form>     
    </div>
    <!-- <div class="bgimg3">
        <div class="caption">
            <span class="border">Be Yourself</span>
        </div>
    </div>
    <div style="position:relative;">
        <div class="bg-dark">
            <h3 class="light-text">Moscow Never Slips</h3>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatem quis, qui officiis explicabo reprehenderit earum debitis atque libero hic!</P>
        </div>
    </div>
    <div class="bgimg1">
        <div class="caption">
            <span class="border">BEK BRACE DESIGN</span>
        </div>
    </div> -->
    <footer class="footer">
        Copyright ©2023 Techno India Hooghly. All Right Reserved
Design and Developed by:Abhinaba Koley (Assistant Professor, Techno India Hooghly )
    </footer>
    <script src="script.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/studPortal.blade.php ENDPATH**/ ?>