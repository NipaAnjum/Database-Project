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
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">   
</head>

<body>
<div class="header">
       <h1> <a href="index.php"><i class="fas fa-palette"></i>  CANVAS</a></h1>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
            <li><a href="<?php echo e(action('AllPageController@showhome')); ?>">Home</a></li>
            <li><a href="<?php echo e(action('AllPageController@showinsert')); ?>">Insert</a></li>
            <li><a href="<?php echo e(action('AllPageController@showupdate')); ?>">Update</a></li>
            <li><a href="<?php echo e(action('AllPageController@showdelete')); ?>">Delete</a></li>
            <li><a href="<?php echo e(action('AllPageController@showdb')); ?>">Database</a></li>
            <li class="x"><a href="#search"><i class="fas fa-search"></i></a></li>
            <li class="x"><a href="login.php" class="tooltip">
            <i class="fas fa-sign-in-alt">
                    <span class="tooltiptext" >Login</span>
            </i></a></li>
        </ul>
    </div>
    <div class="container">
  <h1 align="center">Insert Page</h1>
  <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $asql="SELECT * FROM artist";
  $arecord=mysqli_query($con,$asql);
  ?>
  <h3>Artists</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Artist Id </th>
      <th> Name </th>
      <th> Address </th>
      <th> Phone No  </th>
      </tr>
    </thead>
    <tbody>
    <?php

while($ques=mysqli_fetch_assoc($arecord))
{
  echo "<tr>";
  echo "<td>".$ques['artist_id']."</td>";
  echo "<td>".$ques['artist_name']."</td>";
  echo "<td>".$ques['artist_address']."</td>";
  echo "<td>".$ques['artist_phone']."</td>";
  echo "</tr>";
}  
?>
</tbody>
</table>
  <!--insert artist-->
<div>
<h2>Insert into Artist</h2>
  <form action = "\create2" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Artist Id</td>
<td><input type='text' name='artist_id' /></td>
<tr>
<tr>
<td>Name</td>
<td><input type="text" name='artist_name'/></td>
</tr>
<tr>
<td> Address</td>
<td>
<input type="text" name='artist_address'></td>
</tr>
<tr>
<td> Phone No</td>
<td>
<input type="text" name='artist_phone'></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Insert"/>
</td>
</tr>
</table>
</form>
</div><?php /**PATH C:\xampp\htdocs\demo\resources\views/admin/insertintoartist.blade.php ENDPATH**/ ?>