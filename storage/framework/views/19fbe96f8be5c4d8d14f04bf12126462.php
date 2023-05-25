<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-between">
        <h1 class="fs-3 mb-3">Add New Student</h1>
        <a href="/stud" class="btn btn-outline-primary m-2 btn-sm">Go Back</a>
      </div>
      <form action="" method="">
        <?php echo csrf_field(); ?> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student ID:</label>
            <input type="text" class="form-control" id="exampleInputId1" aria-describedby="idHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/admin/adminAddStud.blade.php ENDPATH**/ ?>