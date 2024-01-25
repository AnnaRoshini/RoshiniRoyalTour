<?php
include "db.php";

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $address = $_POST['address'];
    $pack = $_POST['pack'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    
    $sql = "INSERT INTO `packages`(`name`, `email`, `contact`, `address`, `pack`, `adults`, `children`, `arrival`, `departure`) VALUES ('$name','$email','$contact','$address','$pack','$adults','$children','$arrival','$departure')";
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
            <li><a href="home.html"><i class="fa-sharp fa-solid fa-house" style="padding-right: 5px; font-size: 16px;"></i>HOME</a></li>
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
<div class="sub-header6">
        <div class="heading">
            <h1>TOUR PACKAGES</h1>
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
            <li><a href="#">TOUR PACKAGES</a></li>
        </ul>
    </div>  
    <div class="main-content3" id="mc3">
    <h2 style="text-align: center; margin-bottom: 30px; font-size: 50px; color: #0489B1; "><b>Authentic Adventure</b></h2>
    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/sigiriya.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Majestic Sri Lanka</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Colombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Sigiriya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Kandy<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Nuwara Eliya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Yala<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Mirissa<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Galle<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Pinnawela elephant orphanage, Sigiriya rock fortress, Polonnaruwa, Yala National Park, Mirissa secret beach</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>8 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d2027441.98792587!2d79.37225462372926!3d7.027189418206784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3ae315c9dd1d20b1%3A0x5b721ab11d88d6cf!2sPinnawala%2C%20Rambukkana!3m2!1d7.3014952!2d80.3867417!4m5!1s0x3afca0dfa73179d1%3A0x1e04c1150cff0edf!2sSigiriya!3m2!1d7.954108499999999!2d80.75469799999999!4m5!1s0x3afcaff4c8adcc4f%3A0x67ae3cc5b1536914!2sDambulla!3m2!1d7.874217!2d80.6511287!4m5!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!3m2!1d7.9403384!2d81.0187984!4m5!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!3m2!1d7.2905714999999995!2d80.6337262!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae5d53324f6db25%3A0x8fbeab66053bf1e7!2sYala%2C%20Southern%20Province!3m2!1d6.366667!2d81.516667!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1687435763706!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <hr>

    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/galle.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Outdoor Spaces & Terraces</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i> Negombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Anuradhapura<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Kandalama<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Sigiriya <i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Polonnaruwa<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Kalkudah<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Matale<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Kandy <i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Bandarawela<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Ella<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Galle<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Anuradhapura, Kandalama, Matale, Bandarawela, Passikuda Beach</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>9 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d1012788.0015495963!2d81.00965727687708!3d7.442763900705763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2snegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3afcf4f99360e159%3A0xc111fe9ebc6dcf0e!2sanuradhapura!3m2!1d8.311351799999999!2d80.4036508!4m5!1s0x3afca5c69de26831%3A0x11e9b8e7c0613825!2sKandalama!3m2!1d7.8884985!2d80.7103532!4m5!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!3m2!1d7.9403384!2d81.0187984!4m5!1s0x3afad903403b27d9%3A0xceee87334703322b!2sPasikuda%2C%20Kalkudah!3m2!1d7.922822999999999!2d81.56512699999999!4m5!1s0x3ae344d7d465445d%3A0xd6f70562e8850dbc!2sMatale!3m2!1d7.467465!2d80.6234161!4m5!1s0x3ae470011c243a85%3A0xd94f7b8a6c4e9867!2sBandarawela!3m2!1d6.8258779999999994!2d80.9981576!4m5!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!3m2!1d6.8666988!2d81.046553!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688366928812!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <hr>

    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/kataragama.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Tour of Ramayana sites</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i> Negombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Kandy<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Nuwara Eliya <i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Bandarawela <i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Kataragama<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i> Colombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Anuradhapura, Kandalama, Matale, Bandarawela, Passikuda Beach</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>8 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d1014347.8340200579!2d79.93713359542554!3d6.733669101290405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!3m2!1d7.2905714999999995!2d80.6337262!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae470011c243a85%3A0xd94f7b8a6c4e9867!2sBandarawela!3m2!1d6.8258779999999994!2d80.9981576!4m5!1s0x3ae4260426c19ea1%3A0x722d6bf359bc2aca!2sKatharagama!3m2!1d6.4135463!2d81.3325679!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688478075807!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <hr>

    <h2 style="text-align: center; margin-bottom: 30px; font-size: 50px; color: #0489B1;"><b>Exploratory Nature</b></h2>
    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/Wellawaya.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Footpaths & Hikes</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Elkaduwa<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Kandy<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Ella<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Wellawaya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Galle<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Elkaduwa, Ella, Wellawaya</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>10 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d2027078.001768482!2d79.13426321705515!3d7.1101499752735515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3afd0cc24a7cc5bd%3A0x5ae7ac65637881f0!2sKalpitiya!3m2!1d8.2295281!2d79.7596142!4m5!1s0x3ae46bb8a80653e9%3A0x92402ae71c50a393!2sWellawaya!3m2!1d6.7377356!2d81.1030573!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688564079702!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <hr>

     <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/kalpitiya.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Wrecks & Reefs Of Sri Lanka</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Negombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Kalpitiya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Wellawaya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Galle<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Kalpitiya, Galle, Wellawaya</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>06 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d2027078.001768482!2d79.13426321705515!3d7.1101499752735515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3afd0cc24a7cc5bd%3A0x5ae7ac65637881f0!2sKalpitiya!3m2!1d8.2295281!2d79.7596142!4m5!1s0x3ae46bb8a80653e9%3A0x92402ae71c50a393!2sWellawaya!3m2!1d6.7377356!2d81.1030573!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688564079702!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <hr>


    <h2 style="text-align: center; margin-bottom: 30px; font-size: 50px; color: #0489B1;"><b>Casual Opulence</b></h2>
    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/victoria.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Colonial-style Golf Clubs in Sri Lanka</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Colombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Victoria Golf Course & Resort<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Nuwara Eliya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Negombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Victoria Golf Course & Resort, Nuwara Eliya</i>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>8 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m42!1m8!1m3!1d506820.20267682127!2d80.10603180642546!3d7.064044882383911!3m2!1i1024!2i768!4f13.1!4m31!3e0!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!4m5!1s0x3ae36183e742c50f%3A0x575c632dc2387088!2sVictoria%20Golf%20Resort%2C%20Victoria%20Golf%20Club%20Road%2C%20Kandy!3m2!1d7.264614099999999!2d80.7738839!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%20(CMB)%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688614390431!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <hr>

    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/bentota.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Southern Coastal Paradise</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Negombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Cultural Triangle<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Hatton<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Yala<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Bentota<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Cultural Triangle, Hatton, Bentota, Yala</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>11 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;"  src="https://www.google.com/maps/embed?pb=!1m58!1m12!1m3!1d2026883.9599216906!2d79.37225515007373!3d7.153985304259565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m43!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3afcf4f99360e159%3A0xc111fe9ebc6dcf0e!2sAnuradhapura!3m2!1d8.311351799999999!2d80.4036508!4m5!1s0x3afca0dfa73179d1%3A0x1e04c1150cff0edf!2sSigiriya!3m2!1d7.954108499999999!2d80.75469799999999!4m5!1s0x3ae39b0de302a37b%3A0x6f7d8f7528cf0e2e!2sHatton!3m2!1d6.900344199999999!2d80.5966093!4m5!1s0x3ae5d53324f6db25%3A0x8fbeab66053bf1e7!2sYala%2C%20Southern%20Province!3m2!1d6.366667!2d81.516667!4m5!1s0x3ae22e900168ca21%3A0x96c438f00a68c060!2sBentota!3m2!1d6.4189175!2d80.005979!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%20(CMB)%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688618067999!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    <hr>

     <h2 style="text-align: center; margin-bottom: 30px; font-size: 50px; color: #0489B1;"><b>Sri Lanka's Wildlife Expedition</b></h2>
    <div class="subcontent">
    <div style="display: grid; grid-template-columns: 30% 70%;"class="mc4">
        <div  style="display: grid; grid-template-columns: 100% 0%;"class="left">
        <div class="lf">
        <img style="width:300px; height: 250px;" src="images2/wilpattu.jpg">
        </div>
        <div  class="rg"></div>
        </div>
        <div class="right">
        <h5 style="font-weight: bold; margin-bottom: -5px; font-size: 25;">Nature's Wildlife Safari</h5>
        <div class="link">
        <a style="font-size: 15px;" href="#book">Inquire Now!</a>
        </div>
        <ul style="margin-left:-30px; margin-top: 20px;">
        <li style="list-style: none; margin-bottom: 10px;"><i style="margin-right: 10px;" class="fas fa-route" ></i><b>Route: </b>Airport<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Negombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Wilpattu<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Dambulla<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Nuwara Eliya<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>
        Yala<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Udawalawe<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Sinharaja<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Galle<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Colombo<i style="margin-left:10px; margin-right: 10px;" class="fa-solid fa-angle-right"></i>Airport</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-map-marker" style="margin-right: 10px;"></i><b>Highlights: </b>Pinnawela elephant orphanage, Sigiriya rock fortress, Polonnaruwa, Yala National Park, Mirissa secret beach</li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-car" style="margin-right: 10px;"></i><b>Drive: </b>11 days</li>
        <li style="list-style: none; margin-bottom: 10px;"><b><i class="fa fa-user" style="margin-right: 10px;"></i>The guide requires an accommodation or charges a payment of $10 for accommodation.</b></li>
        <li style="list-style: none; margin-bottom: 10px;"><i class="fa fa-link" style="margin-right: 10px;"></i><a style="color: black; text-decoration: none;"  href="destination.html">Refer For More Details About Destinations</a></li>
        </ul>
        </ul>
        </div>
    </div>
    <iframe style="width:1085px; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d2026883.9599216906!2d79.37225515007373!3d7.153985304259565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3afdac7787e4bc27%3A0xcdd9a0715dad187c!2sWilpattu%20National%20Park!3m2!1d8.4581819!2d80.0518306!4m5!1s0x3afcaff4c8adcc4f%3A0x67ae3cc5b1536914!2sDambulla!3m2!1d7.874217!2d80.6511287!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae5d53324f6db25%3A0x8fbeab66053bf1e7!2sYala%2C%20Southern%20Province!3m2!1d6.366667!2d81.516667!4m5!1s0x3ae408ff88887e79%3A0xaf12e79ffbd980d7!2sUdawalawe%20National%20Park!3m2!1d6.4746288!2d80.876319!4m5!1s0x3ae3e15337214f73%3A0x2a183b31df3e363a!2sSinharaja%20Forest%20Edge%2C%20Road%2C%20Deniyaya!3m2!1d6.3578095999999995!2d80.48894589999999!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!4m5!1s0x3ae2efb735f22d5d%3A0x6ebd702103828b37!2sBandaranaike%20International%20Airport%2C%20Katunayake!3m2!1d7.1801552!2d79.8842521!5e0!3m2!1sen!2slk!4v1688621858888!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    </div>
   
<!-- <div class="page-wrapper">
    <div class="container">
<div class="row">
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image84.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>FULL DAY TOUR</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>1 Day</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$60</p>
    </div>
    </div>
    </div>
    </div>
</div>
    
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image83.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>STREET FOOD TOUR BY TUK TUK</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>10h</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$40</p>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image82.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>PRIVATE HALF DAY TOUR</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>13h</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$55</p>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image194.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>CITY TOUR BY TUK TUK</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>8h</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$33</p>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image196.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>CITY TOUR BY BUS</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>10h</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$48</p>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image195.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>TOUR TO SIGIRIYA</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>4 Days</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$193</p>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image197.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>TOUR TO ANURADHAPURA</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>5 Days</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$195</p>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box2 card">
    <div class="feature-img2 imgbx">
        <img src="images/image198.jpg">
    </div>
    <div class="feature-details2 con">
        <h4>TOUR TO GALLE</h4>
    </div>
    <div class="ti-pr">
    <div class="content-left3">
    <div class="rate-f">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    
    <div class="time">
      <p><i class="fa fa-clock-o"></i>3 Days</p>  
    </div>    
    </div>
    <div class="content-right3">
    <div class="prices">
        <p>$182</p>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>-->
    
</section>    
<section>
    <div id="sub-heading-acc" class="shacc">
         <h1 id="book">INQUIRE NOW!</h1>
        <div class="booking-form-box">
<form action="" method="post" class="book-form">
<div class="flex">
    <div class="inputBox">
        <span>Name:</span>
        <input type="text" placeholder="Enter your name" name="name" class="form-control">
    </div>
    <div class="inputBox">
        <span>Email:</span>
        <input type="email" placeholder="Enter your email" name="email" class="form-control">
    </div>
    <div class="inputBox">
        <span>Contact:</span>
        <input type="number" placeholder="Enter your number" name="phone" class="form-control">
    </div>
    <div class="inputBox">
        <span>Address:</span>
        <input type="text" placeholder="Enter your address" name="address" class="form-control">
    </div>
    <div class="inputBox">
        <span>Package Name:</span>
        <input type="text" placeholder="Enter package name" name="pack" class="form-control">
    </div>
    <div class="inputBox">
        <span>Number of Adults:</span>
        <input type="number" placeholder="Number of adults" name="adults" class="form-control">
    </div>
    <div class="inputBox">
        <span>Number of Children:</span>
        <input type="number" placeholder="Number of children" name="children" class="form-control">
    </div>
    <div class="inputBox">
        <span>Check In:</span>
        <input type="date" name="arrival" class="form-control">
    </div>
    <div class="inputBox">
        <span>Check Out:</span>
        <input type="date" name="departure" class="form-control">
        
        <button class="btn" name="submit" value="Log In">Submit</button>
    </div>
</div>    
    
</form>    
</div>
    </div>
</section>
<section class="footer">

    <ul class="menulinks">
        <li><a href="home.html">HOME</a></li>
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