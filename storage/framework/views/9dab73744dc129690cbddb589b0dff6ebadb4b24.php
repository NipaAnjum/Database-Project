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
            
        </ul>
    </div>
    <br><br>
<h3>Left Outer Join</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Artist Id </th>
      <th>Artist Name </th>
      <th>Artist Address </th>
      <th>Phone</th>
      <th>Painting Id </th>
      <th>Title </th>
      <th> Price </th>
      <th>Artist Id </th>
      <th>Status </th>
      <th>Path </th>
      </tr>
    </thead>
    <tbody>
<?php
foreach ($x as $user){?>
<tr>
<td><?php echo $user->artist_id; ?></td>
<td><?php echo $user->artist_name;?></td>
<td><?php echo $user->artist_address; ?></td>
<td><?php echo $user->artist_phone; ?></td>
<td><?php echo $user->painting_id;?></td>
<td><?php echo $user->title;?></td>
<td><?php echo $user->price;?></td>
<td><?php echo $user->artist_id; ?></td>
<td><?php echo $user->sold;?></td>
<td><?php echo $user->img_dir;?></td>
</tr>
<?php }
?>
</tbody>
</table>
<br><br>
<h3>Union</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Artist Id </th>
      </tr>
    </thead>
    <tbody>
<?php
foreach ($x as $user){?>
<tr>
<td><?php echo $user->artist_id;?></td>

</tr>
<?php }
?>
</tbody>
</table>
<br>

<!--subquery & max-->

<?php 
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $sql="SELECT painting_id,title 
  FROM painting
  WHERE  painting_id <>
  (SELECT painting_id FROM buy)
  ";
  $r=mysqli_query($con,$sql);
  ?>
  <h3>Sub Query</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Painting Id </th>
      <th> Title </th>
      </tr>
    </thead>
    <tbody>
    <?php

while($ques=mysqli_fetch_assoc($r))
{
  echo "<tr>";
  echo "<td>".$ques['painting_id']."</td>";
  echo "<td>".$ques['title']."</td>";
  echo "</tr>";
} 
?>
</tbody>
</table>

<?php /**PATH C:\xampp\htdocs\demo\resources\views/admin/lojoindata.blade.php ENDPATH**/ ?>