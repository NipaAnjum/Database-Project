<html><head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login.php">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="C:\xampp\htdocs\my_project\x">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">   

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="header">
       <h1> <a href="index.php" style="text-decoration:none"><i class="fas fa-palette"></i>  CANVAS</a></h1>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
        <li><a href="<?php echo e(action('AllPageController@index')); ?>">Home</a></li>
            <li><a href="<?php echo e(action('AllPageController@showgallery')); ?>">Gallery</a></li>
            <li><a href="<?php echo e(action('AllPageController@showartist')); ?>">Artists</a></li>
            <li><a href="<?php echo e(action('AllPageController@showexhibition')); ?>">Exhibitions</a></li>
            </ul>
    </div>
    <!-- LEft Join
SHOWS WHICH ARTIST'S ART IS ON EXHIBITION
-->
<?php
 $con= mysqli_connect('localhost','root','');
 mysqli_select_db($con,'gallery');
 $ps="CALL `get_procedure`()";
 $r=mysqli_query($con,$ps);
 ?>
 <h3>Upcoming Exhibitions</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Exhibition Name </th>
      <th>Start Date </th>
        <th>End Date</th>
        <th>Artist Name</th>
      </tr>
    </thead>
    <?php
 while($row=mysqli_fetch_assoc($r))
 {
  echo "<tr>";
  echo "<td>".$row['exhibition_name']."</td>";
  echo "<td>".$row['start_date']."</td>";
  echo "<td>".$row['exhibition_location']."</td>";
  echo "<td>".$row['artist_name']."</td>";
  echo "</tr>";
 }
?>
</tbody>
</table><?php /**PATH C:\xampp\htdocs\demo\resources\views/pages/exhibitions.blade.php ENDPATH**/ ?>