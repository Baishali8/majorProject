<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up Admin</title>

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./CSS/admin/login.css">

</head>

<body>

    <div class="login">
          
      <a href="/profile"><i class="fa-solid fa-arrow-left"></i></a>
      <h1 class="text-center">Register Yourself Here</h1>

      <form action="/adsubmit" method="post">
        <?php echo csrf_field(); ?> 

        <div class="form-group">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" name="username" placeholder="username123" class="form-control">
        </div>

        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="email" placeholder="email@gmail.com" class="form-control">
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" placeholder="****" class="form-control">
        </div>

        <div class="form-group form-check">
          <input type="checkbox" name="check" id="check" class="form-check-input">
          <label for="check" class="form-check-label">Remember Me</label>
        </div>

        <input class="btn btn-success w-100" type="submit" value="Sign In" name="submit">

      </form>

    </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/admin/adminReg.blade.php ENDPATH**/ ?>