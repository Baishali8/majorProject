<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal Dashboard</title>
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="head">
            <?php if(Session::get('user')): ?>
            <h1 class="text-center">Welcome <?php echo e(Session::get('user')); ?></h1>
            <!-- <h2 class="text-center">Department:BCA</h2> -->
            <h2 class="text-center">Roll No:<?php echo e(Session::get('roll')); ?></h2>
            <?php endif; ?>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="images/bca.png" alt="">
                <h3>Create Profile</h3>
                <a href="studForm" class="btn">Click Here</a>
            </div>
            <div class="box">
                <img src="images/bca.png" alt="">
                <h3>View Profile</h3>
                <a href="#" class="btn">Click Here</a>
            </div>
            <!-- <div class="box">
                <img src="images/bca.png" alt="">
                <h3>Update Profile</h3>
                <a href="#" class="btn">Click Here</a>
            </div> -->
            <div class="box">
                <img src="images/bca.png" alt="">
                <h3>Upload CV</h3>
                <a href="#" class="btn">Click Here</a>
            </div>
            <div class="box">
                <img src="images/bca.png" alt="">
                <h3>Pay Fees</h3>
                <a href="fees-payment" class="btn">Click Here</a>
            </div>
            <!-- <div class="box">
                <img src="images/bca.png" alt="">
                <h3>Change Login Information</h3>
                <a href="#" class="btn">Click Here</a>
            </div> -->
            <div class="box">
                <img src="images/bca.png" alt="">
                <h3>Log Out</h3>
                <a href="/logout" class="btn">Click Here</a>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/studentDash.blade.php ENDPATH**/ ?>