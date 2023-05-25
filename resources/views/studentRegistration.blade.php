<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./CSS/studReg.css">
</head>
<body>
    <div class="main">
        <div class="register">
            <h2>Registration Form</h2>
            <form id="register" action="/register" method="post">
                @csrf 
                <label>Student ID</label>
                <br>
                <input type="text" name="Student_ID" id="name" placeholder="Enter Your Student ID">
                <br><br>
                <label>Create a Password</label>
                <br>
                <input type="password" name="Password" id="name" placeholder="Enter a Password">
                <br><br>
                <label>Name</label>
                <br>
                <input type="text" name="Name" id="name" placeholder="Enter your Name">
                <br><br>
                <label>Email Address</label>
                <br>
                <input type="email" name="Email" id="name" placeholder="Enter your Email Address">
                <br><br>
                <label>Mobile Number</label>
                <br>
                <input type="number" name="Phone" id="name" placeholder="Enter Your Mobile Number">
                <br><br>  
                <input type="submit" value="submit" id="submit" name="submit">         
            </form>
        </div>
    </div>
</body>
</html>