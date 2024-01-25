<?php
include "db.php";

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['number'];
    $message = $_POST['message'];
    
    
    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email]','$contact','$message')";
    $result = mysqli_query($db,$sql);
        if($result){
            $message = "Data Added Succesful";
                echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else {
            $message = "Error";
                echo "<script type='text/javascript'>alert('$message');</script>";
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
    <div class="contactEmailDiv">
        <div class="number ee">
        <i class="fa fa-phone"></i>
        <a href="tel:+94776414097"><h6>Hotline: +94776414097</h6></a>
        </div>
        <div class="email ee">
        <i class="fa fa-envelope"></i>
        <a href="mailto:ajithfernando134@gmail.com"><h6>Email Us: ajithfernando134@gmail.com</h6></a>
        </div>
    </div>
    
    <header>
    <div class="menu-bar" id="des-menu">
    <nav>
        <a href="#"><img src="images/logors1.png"></a>
        <div class="nav-links" id="navLinks">
       <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul style="margin-left: -50px;">
            <li><a href="index.html"><i class="fa-sharp fa-solid fa-house" style="padding-right: 5px; font-size: 16px;"></i>HOME</a></li>
            <li><a href="destination.html"><i class="fa-sharp fa-solid fa-location-dot" style="padding-right: 5px; font-size: 16px;"></i>DESTINATIONS</a></li>
            <li><a href="packages.php"><i class="fa-sharp fa-solid fa-person-walking-luggage" style="padding-right: 5px; font-size: 17px;"></i>TOUR PACKAGES</a></li>
            <li><a href="contact.php"><i class="fa-sharp fa-solid fa-phone" style="padding-right: 5px; font-size: 16px;"></i>CONTACT US</a></li>
            <li><a href="profile.html"><i class="fa-sharp fa-solid fa-user-tie" style="padding-right: 5px; font-size: 16px;"></i>PROFILE</a></li>
            <li><a href="login.php"><i class="fa-sharp fa-solid fa-user" style="padding-right: 5px; font-size: 16px;"></i>LOG-IN</a></li>
  
                
            </ul>
                <form action="https://www.google.com/search" method="get" class="search-bar2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="" name="q">
                    <button type="submit">Search</button>
                    </form>    
           
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</div>
</header>
    
    
<div class="sub-header7">
        <div class="heading">
            <h1>CONTACT US</h1>
        </div>
</div>    
    
<!---javascript for Menu--->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-300px";
    }
</script>    
    
        
    


<section class="features6" id="f6">
    <div class="sub-nav2">
        <ul>
            <li><a href="#">HOME<i class="fa-solid fa-angle-right"></i></a></li>
            <li><a href="#">CONTACT US</a></li>
        </ul>
    </div>  
   <div class="location">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126670.38337593274!2d79.78821260842466!3d7.189443134408622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!5e0!3m2!1sen!2slk!4v1657519487066!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</div>

<section class="contact-us">
<div class="row">
    <div class="contact-col">
        <div>
            <i class="fa fa-home"></i>
            <span>
            <h5>W.A.S.F.Fernando</h5>
            <p>No: 331/F/10, Sarappuwatta, Welihena South, Kochchikade.</p>
            </span>
        </div> 
        <div>
            <i class="fa fa-phone"></i>
            <span>
            <h5>+94776414097</h5>
            <p>Contact Us for more details</p>
            </span>
        </div> 
        <div>
            <i class="fa fa-envelope-o"></i>
            <span>
            <h5>ajithfernando134@gmail.com</h5>
            <p>Email us your query</p>
            </span>
        </div> 
    </div>
<div class="contact-col">
    <form id="contact-form" method="post" action="">
    <input name="name"  type="text" placeholder="Enter your name" required>
    <input name="email" type="email" placeholder="Enter your email" required>
    <input name="number" type="number" placeholder="Enter your phone number" required>
    <textarea name="message" type="text" rows="8" placeholder="Message" required></textarea>
    <button name="submit" value="Log In" class="hero-btn">Send</button>
    </form>  
</div>
</div>
</section>

</section>


<section class="footer">

    <ul class="menulinks">
        <li><a href="index.html">HOME</a></li>
        <li><a href="destination.html">DESTINATIONS</a></li>
        <li><a href="packages.php">TOUR PACKAGES</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="profile.html">PROFILE</a></li>
    </ul>
    
    
    <p>&copy;2023 ROSHINI ROYAL TOUR | All Rights Reserved</p>
    <p>Create By Ms. Anna Roshini</p>
    
    <a href="#" class="to-top"><i class="fa fa-arrow-up"></i></a>
<script>
    const toTop = document.querySelector(".to-top");
    window.addEventListener("scroll",()=>{
        if(window.pageYOffset > 100){
            toTop.classList.add("active");
        }else{
            toTop.classList.remove("active");
        }
    })
    
</script>
</section>
</body>
</html>