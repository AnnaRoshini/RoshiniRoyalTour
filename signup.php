<?php
include "db.php";

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conpassword = $_POST['cpassword'];
    
    if($password===$conpassword){
        $sql = "INSERT INTO `customer`(`name`, `email`, `address`, `contactNo`, `username`, `password`) VALUES ('$name','$email','$address','$contactno','$username','$password')";
        $result = mysqli_query($db,$sql);
        if($result){
            $message = "Signup sucessful";
                echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else {
            $message = "Error";
                echo "<script type='text/javascript'>alert('$message');</script>";
        } 
    }
    else {
        echo "Check the password";
    }        
}

?>




<html lang="en">
<head>
<title>ROSHINI ROYAL TOUR</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="veiwport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="icon" href="./images/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/4504054c35.js" crossorigin="anonymous"></script>    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="sub-header8">
<div class="signup">
   
    <form class="signup-form" action="" method="post">
        <h1>SIGN UP</h1>
        <div class="inputBox">
            <label for="name">Name:</label>
            <input type="text" placeholder="Name" id="name" name="name" class="form-control" value="" required>
        </div>
        <div class="inputBox">
            <label for="email">Email:</label>
            <input type="email" placeholder="Email" id="email" name="email" class="form-control" value="" required>
        </div>
        <div class="inputBox">
            <label for="address">Address:</label>
            <input type="text" placeholder="Address" id="address" name="address" class="form-control" value="" required>
        </div>
        <div class="inputBox">
            <label for="contactno">Contact Number:</label>
            <input type="text" placeholder="Contact Number" id="contactno" name="contactno" class="form-control" value="" required>
        </div>
        
        <div class="inputBox">
            <label for="username">Username:</label>
            <input type="text" placeholder="Username" id="username" name="username" class="form-control" value="" required>
        </div>
        
        <div class="inputBox">
            <label for="password">Password:</label>
            <input type="password" placeholder="Password" id="password" name="password" class="form-control" value="" required>
        </div>
        <div class="inputBox">
            <label for="cpassword">Comfirm Password:</label>
            <input type="password" placeholder="Comfirm Password" id="cpassword" name="cpassword" class="form-control" value="" required>
        </div>
        <button class="btn" name="submit" value="Sign Up">Submit</button>
        <p class="signup-text">Have an account?<a href="login.php">Login Here</a></p>
    </form>
</div>
</div>    
    
    
    
</body>
</html>