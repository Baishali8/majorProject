<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fees Submission</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body{
            background-color: white;
            color: #000;
            }
        .heading{
            text-align: center;
        }
        .container{
          margin-top:5rem; 
        }
        
    </style>

  </head>
  <body>
    <div class="container">
    <h1 class="heading mb-5">Fees Payment</h1>
    <form action="/fees" method="post" class="row g-3 needs-validation border"  novalidate>
    <?php echo csrf_field(); ?>
        <div class="col-md-3">
          <label for="validationCustom01" class="form-label" placeholder="Hello" >Student ID</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your Student ID" name="StudentID" required>
          <div class="valid-feedback">
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom01" class="form-label" aria-placeholder="Hello">First Name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your first name" name="Fname" required>
          <div class="valid-feedback">
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom02" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Enter your last name" name="Lname" required>
          <div class="valid-feedback">
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustomUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Enter your Email here" name="Email" required>
            <div class="invalid-feedback">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom03" class="form-label">Date</label>
          <input type="date" class="form-control" id="validationCustom03" name="Date" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>  
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Stream</label>
            <select class="form-select" id="validationCustom04" name="course_id" required>
              <option selected disabled value="">Choose your Stream</option>
              <option value="1">BCA</option>
              <option value="2">BBA</option>
              <option value="4">MCA</option>
              <option value="3">Msc. Computer Science</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
        </div> 
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Semester</label>
            <select class="form-select" id="validationCustom04" name="Semester" required>
            <option selected disabled value="">Choose your semester</option>
            <option value="1st Sem">1st Semester</option>
            <option value="2nd Sem">2nd Semester</option>
            <option value="3rd Sem">3rd Semester</option>
            <option value="4th Sem">4th Semester</option>
            <option value="5th Sem">5th Semester</option>
            <option value="6th Sem">6th Semester</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Payable Fees</label>
                <input class="form-control" type="text" value="30000" name="payableFee" aria-label="Disabledinputexample" readonly>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
        
        <div class="d-flex justify-content-evenly">
          <button class="btn btn-primary bg-sucess mb-3" type="submit" name="fees">Pay Now</button>
          <!-- <a href="/no" class="btn btn-primary bg-sucess mb-3">Pay Now</a> -->
          <a href="home" class="btn btn-danger bg-sucess mb-3">Pay Offline</a>
          <!-- <button class="btn btn-primary bg-danger mb-3" type="submit" name="home">Pay Offline</button> -->
        </div>
      </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>







<?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/fees.blade.php ENDPATH**/ ?>