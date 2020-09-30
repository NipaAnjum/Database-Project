<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ART GALLERY</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="login.php">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\my_project\x">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
    * {
        box-sizing: border-box;
    }
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
    }
    /*header*/
    .header{
        position: relative;
        padding: 50px;
        text-align: left;
        background: #333333;
    }
    .header a{
        color: azure;
        text-decoration: none;
    }
    .header h1 {
        font-family: 'Times New Roman', Times, serif;
        font-size: 50px;
        position: absolute;
        top: -2px;
        left: 16px;
    }
    /*nav bar*/
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: black;
        
    }

    li {
        float: left;
    }

    li a,
    .dropbtn {
        display: inline-block;
        color: azure;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
        background-color: #333;
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #333;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color:azure;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #333
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    .x {
        float: right;
    }
    /*slide show*/
    .mySlides {display: none;}
    img {vertical-align: middle;
        margin-top: 20px;
    }
    .slideshow-container {
        max-width: 500px;
        max-height: 200px;
        position: relative;
        margin: auto;
      }
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        margin-top: 90px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active {
        background-color: #717171;
      }
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      
      @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
      @keyframes  fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
      @media  only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }
      .footer { 
        padding: 60px;
        text-align: center;
        background: #333;
        margin-bottom: 20px;
    }
    .newspaper {
        -webkit-column-count: 3;
        column-count: 3;
        color: azure;
    }
    .about{
        background: rgb(238, 234, 234);
        text-align: center;
        color: #333;
    }
    .about img{
        width: 300;
        height: 300;
        align: center;
    }
    /*account create*/
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }
      
      button:hover {
        opacity:1;
      }
      .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
      }
      .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
      }
      .container {
        padding: 16px;
      }
      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
       @media  screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
      }
      /*tooltip*/
      .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
      }
      .tooltip .tooltiptext {
        visibility: hidden;
        width: 80px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 3px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: 15px;
        right: 105%;
      }
      .tooltip:hover .tooltiptext {
        visibility: visible;
      }
      .div6 {
        padding: 60px;
        text-align: center;
        background: rgb(238, 234, 234);
        margin-bottom: 20px;
        border: 2px solid black;
      }
      .self {
        -webkit-column-count: 2;
        column-count: 2;
        color: black;
        font-family: 'Times New Roman', Times, serif;
      }
</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="header">
       <h1> <a href="#"><i class="fas fa-palette"></i>  CANVAS</a></h1>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Gallery</a>
                <div class="dropdown-content">
                    <a href="#">Paintings</a>
                    <a href="#">Photography</a>
                </div>
            </li>
            <li><a href="artistpage.php">Artists</a></li>
            <li><a href="#exhibition">Exhibitions</a></li>
            <li><a href="create_account.php">Create Artist</a></li>
            <li><a href="create_account2.php">Create Customer</a></li>
            <li class="x"><a href="#buy"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="x"><a href="#search"><i class="fas fa-search"></i></a></li>
            <li class="x"><a href="login.php" class="tooltip">
            <i class="fas fa-sign-in-alt">
                    <span class="tooltiptext" >Login</span>
            </i></a></li>
        </ul>
    </div>
 
    <div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="<?php echo e(asset('images/homeimg/'.'dwnld2.jpg')); ?>" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'dwnld3.jpg')); ?>" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'sk.jpg')); ?>" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
<br>
    <div class="about">
        <h2>ABOUT</h2>
        <img src="<?php echo e(asset('images/homeimg/'.'bd.jpg')); ?>">
        <p>Canvas features the world's leading galleries,sculptures,artist estates,art fairs,exhibitions,all in one place. Our growing 
database of 1,000,000 works of art,architecture,and artists from our country. Canvas is used by art lovers,students,and 
educators to discover,learn about,and collect art.
        </p>
    <div class="footer" style="background-image:linear-gradient(to right,#333,rgb(117, 112, 112))">
        <div class="newspaper">
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest"></i>
            <br> <br>
            Customer Support <br>
            01720001110 <br>
            returns <br>
            FAQ
        </div>
    </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\demo\resources\views/welcome.blade.php ENDPATH**/ ?>