<html><head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login.php">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="C:\xampp\htdocs\my_project\x">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- Admin -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">   
</head>

<body>
<div class="header">
       <h1> <a href="index.php"><i class="fas fa-palette"></i>  CANVAS</a></h1>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
            <li><a href="{{ action('AllPageController@showhome')}}">Home</a></li>
            <li><a href="{{ action('AllPageController@showinsert')}}">Insert</a></li>
            <li><a href="{{ action('AllPageController@showupdate')}}">Update</a></li>
            <li><a href="{{ action('AllPageController@showdelete')}}">Delete</a></li>
            <li><a href="{{ action('AllPageController@showdb')}}">Database</a></li>
          <!--  <li><a href='lojoindata.blade.php'>Extra</a></li> -->
        </ul>
    </div>

    <div class="slideshow-container">

<div class="mySlides fade">
  <img src="{{ asset('images/homeimg/'.'dwnld2.jpg')}}" style="width:100%">
  <div class="text"><h3>Best Collection of Paintings</h3></div>
</div>

<div class="mySlides fade">
  <img src="{{ asset('images/homeimg/'.'dwnld3.jpg')}}" style="width:100%">
  <div class="text"><h3>Thousands of Artists</h3></div>
</div>

<div class="mySlides fade">
  <img src="{{ asset('images/homeimg/'.'sk.jpg')}}" style="width:100%">
  <div class="text"><h3>Exhibitions Near You</h3></div>
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
<br><br><br>
<div class="about">
        <h2>ABOUT</h2>
        <img src="{{ asset('images/homeimg/'.'bd.jpg')}}">  <br><br>
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