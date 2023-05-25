<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard TIH</title>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CDn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="./CSS/admin/admin.css">
</head>
<body>
    
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->

        <div class="bg" id="sidebar-wrapper">

            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i> Admin TIH
            </div>

            <div class="list-group list-group-flush my-3 sidebar">
                <a href="/dash" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-chart-simple me-2"></i>Dashboard</a>
                <a href="/adstud" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-sharp fa-solid fa-graduation-cap me-2"></i>Students</a>
                <a href="/cour" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-book-open me-2"></i>Course</a>
                <a href="/adminfee" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-money-bill me-2"></i>Fees</a>
                <a href="/adminad" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user-graduate me-2"></i>New Admission</a>
                <a href="/ad-query" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-comment me-2"></i>Query</a>
                <a href="/profile" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user-plus me-2"></i>Register Admin</a>
                <a href="/adlogout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
            </div>

        </div>

        <!-- Sidebar End -->

        <div id="page-content-wrapper">
            
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    

<?php echo $__env->yieldContent('admin'); ?>




        </div>
            <!-- Main Body -->
            <!-- Footer -->
            <!--
            <footer class="bg-dark text-center text-white">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    Baishali Dutta
                </div>
            </footer>
            -->
            <!-- Footer End -->
            
        </div>
       
    </div>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Custom Js -->
    <script src="./JS/admin.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/admin/adminLayout.blade.php ENDPATH**/ ?>