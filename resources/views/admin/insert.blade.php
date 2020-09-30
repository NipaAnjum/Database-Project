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
<!-- Fonts -->
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
           
        </ul>
    </div>
    <div class="container">
  <br>
  
  <a href="/admin/insertintogallery"><h3> Go To Insert New Gallery.</h3> </a>

<!-- GALLERY END -->
<!--EXHIBITION-->
<!--show the chart-->
<br><br><br>
  
  <a href="/admin/insertintoexhibition"><h3> Go To Insert New Exhibition.</h3> </a>
<!--END OF EXHIBITION-->
<br><br><br>
  <!--ARTIST-->
  <!-- select operation-->
  
<br>
<a href='/admin/insertintoartist'><h3> Go To Insert New Artist.</h3> </a>
<!--end of ARTIST-->
<br><br><br>
<!--CUSTOMER-->

  <a href='/admin/insertintocustomer'><h3> Go To Insert New Customer.</h3> </a>

  <br><br><br>
  <a href='/admin/insertintopainting'><h3> Go To Insert New Painting.</h3> </a>
  <br><br><br>
  <a href="{{action('AllPageController@hs')}}"><h3> Go To Has table </h3> </a>
  <br><br><br>
  <a href="/admin/buy"><h3> Go To buy table </h3> </a>
</div>
</body>
</html>
