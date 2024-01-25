<?php
include "db.php";

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === "admin" && $password==="123"){
        header("location:Dashbord/pages\dashboard.php");
    }
    else {
        $stmt = $db->prepare("SELECT * FROM `customer` WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmtresult=$stmt->get_result();
        if($stmtresult->num_rows>0){
            $data = $stmtresult->fetch_assoc();
            if($data["password"]===$password){
                header("location:packages.php");
            }
            else{
                $message = "Loging unsucessful";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        else {
            $message = "User name is not valid";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
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
        <h1>LOG IN</h1>
        <div class="inputBox">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="inputBox">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <button class="btn" name="submit" value="Log In">Submit</button>
        <p class="signup-text">Don't have an account?<a href="signup.php">SignUp Here</a></p>
    </form>
</div>
</div>    
    
    
    
</body>
</html>