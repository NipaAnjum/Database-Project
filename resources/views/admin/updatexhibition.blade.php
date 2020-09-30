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
  <h1 align="center">Update Page</h1>
  <!-- GALLERY-->
  <!-- select operation-->
  <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $gsql="SELECT * FROM exhibition";
  $galrecord=mysqli_query($con,$gsql);
  ?>
  <h3>Exhibitions</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Exhibition Id </th>
      <th>Exhibition Name</th>
      <th>Start Date </th>
      <th>End Date </th>
      <th>Location</th>
      <th>Artist Id</th>
      <th> Edit </th>
      </tr>
    </thead>
    <?php
      while($ques=mysqli_fetch_assoc($galrecord))
      {
        echo "<tr>";
        echo "<td>".$ques['exhibition_id']."</td>";
        echo "<td>".$ques['exhibition_name']."</td>";
        echo "<td>".$ques['start_date']."</td>";
        echo "<td>".$ques['end_date']."</td>";
        echo "<td>".$ques['exhibition_location']."</td>";
        echo "<td>".$ques['artist_id']."</td>";
        echo "<td>"?>
        <a href = "{{action('AllPageController@exhibitionupdateform')}}">
        <?php echo "Change"; ?>
        </a></td>
       <?php echo "</tr>";
      }  ?>
  </table> 
  <br>
</div>
