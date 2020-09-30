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
    <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $gsql="SELECT * FROM gallery";
  $galrecord=mysqli_query($con,$gsql);
  ?>
  <h3>Galleries</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Gallery Id </th>
      <th>Gallery Name</th>
        <th>Location</th>
      </tr>
    </thead>
    <?php

      while($ques=mysqli_fetch_assoc($galrecord))
      {
        echo "<tr>";
        echo "<td>".$ques['gallery_id']."</td>";
        echo "<td>".$ques['gallery_name']."</td>";
        echo "<td>".$ques['gallery_location']."</td>";
        echo "</tr>";
      }  
      ?>
  </table> 
  <br>
  <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $esql="SELECT * FROM exhibition";
  $exrecord=mysqli_query($con,$esql);
  ?>
  <h3>Exhibitions</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Exhibition Id </th>
      <th>Exhibition Name</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Exhibition Location</th>
      <th>Artist Id</th>
      </tr>
    </thead>
    <?php

      while($ques=mysqli_fetch_assoc($exrecord))
      {
        echo "<tr>";
        echo "<td>".$ques['exhibition_id']."</td>";
        echo "<td>".$ques['exhibition_name']."</td>";
        echo "<td>".$ques['start_date']."</td>";
        echo "<td>".$ques['end_date']."</td>";
        echo "<td>".$ques['exhibition_location']."</td>";
        echo "<td>".$ques['artist_id']."</td>";
        echo "</tr>";
      }  
      ?>
  </table> 
  <br>
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
<br>


<?php 
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $csql="SELECT * FROM customer";
  $crecord=mysqli_query($con,$csql);
  ?>
  <h3>Customers</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Customer Id </th>
      <th> Name </th>
      <th> Address </th>
      <th> Phone No  </th>
      </tr>
    </thead>
    <tbody>
    <?php

while($ques=mysqli_fetch_assoc($crecord))
{
  echo "<tr>";
  echo "<td>".$ques['customer_id']."</td>";
  echo "<td>".$ques['customer_name']."</td>";
  echo "<td>".$ques['customer_address']."</td>";
  echo "<td>".$ques['customer_phone']."</td>";
  echo "</tr>";
} 
?>
</tbody>
</table>
<br>
<?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $psql="SELECT * FROM painting";
  $precord=mysqli_query($con,$psql);
  ?>
  <h3>Paintings</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Painting Id </th>
      <th>Title </th>
        <th>Price</th>
        <th>Artist Id</th>
        <th>Status</th>
        <th>Path</th>
      </tr>
    </thead>
    <?php

      while($ques=mysqli_fetch_assoc($precord))
      {
        echo "<tr>";
        echo "<td>".$ques['painting_id']."</td>";
        echo "<td>".$ques['title']."</td>";
        echo "<td>".$ques['price']."</td>";
        echo "<td>".$ques['artist_id']."</td>";
        echo "<td>".$ques['sold']."</td>";
        echo "<td>".$ques['img_dir']."</td>";
        echo "</tr>";
      }  
      ?>
  </tbody>
</table>
  <br>
  <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $gsql="SELECT distinct(painting_id),price,customer_id FROM buy";
  $galrecord=mysqli_query($con,$gsql);
  ?>
  <h3>Sold Products</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Painting Id </th>
      <th>Price </th>
        <th>Customer Id</th>
      </tr>
    </thead>
    <?php

      while($ques=mysqli_fetch_assoc($galrecord))
      {
        echo "<tr>";
        echo "<td>".$ques['painting_id']."</td>";
        echo "<td>".$ques['price']."</td>";
        echo "<td>".$ques['customer_id']."</td>";
        echo "</tr>";
      }  
      ?>
  </table> 
  <br>
  <!--Avg-->
  <?php
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'gallery');
  $bp = "SELECT painting_id,avg(price),customer_id FROM buy group by customer_id";
  $gal=mysqli_query($con,$bp);
  ?>
  <h3>Customer Average Buy</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Average Cost </th>
        <th>Customer Id</th>
      </tr>
    </thead>
    <?php
  while($q=mysqli_fetch_assoc($gal)){
        echo "<tr>";
        echo "<td>".$q['avg(price)']."</td>";
        echo "<td>".$q['customer_id']."</td>";
        echo "</tr>";}
        ?>
        </tbody>
        </table>
        <br>
  <!--SUBQUERY painting and buy
  IT SHOWS THE UNSOLD PRODUCTS
  -->
  <?php 
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $sql="SELECT painting.painting_id,title 
  FROM painting
  WHERE  painting.painting_id not in
  (SELECT buy.painting_id FROM buy)";
  $r=mysqli_query($con,$sql);
  ?>
  <h3>Available Products</h3>
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
<br>
 <!--UNION painting and ex
  IT SHOWS WHICH ARTIST PARTICIPATED THE EXHIBITION
  -->
  <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $psql="SELECT artist_id FROM painting
  UNION
  SELECT artist_id FROM exhibition";
  $r=mysqli_query($con,$psql);
  ?>
<h3>PARTICIPANTS</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Artist Id </th>
      </tr>
    </thead>
    <tbody>
    <?php

while($ques=mysqli_fetch_assoc($r))
{
  echo "<tr>";
  echo "<td>".$ques['artist_id']."</td>";
  echo "</tr>";
} 
?>
</tbody>
</table>
<!--AGGREGATE
COUNT 
VIEW USED
  IT SHOWS WHICH ARTIST PARTICIPATED THE EXHIBITION
  -->
  <?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $psql="CREATE view exhibitionView AS 
  SELECT painting.artist_id,artist.artist_name,count(painting_id)
  from painting  join artist on painting.artist_id = artist.artist_id
  group by painting.artist_id,artist.artist_name
  order by artist_id";
  $rr=mysqli_query($con,$psql);
  $xx = "SELECT * FROM exhibitionView";
  $r=mysqli_query($con,$xx);
  ?>
  <h3> WORKS</h3>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Artist Name </th>
      <th>Artist Id </th>
      <th>Number of Paintings</th>
      </tr>
    </thead>
    <?php
 while($row=mysqli_fetch_assoc($r))
 {
  echo "<tr>";
  echo "<td>".$row['artist_name']."</td>";
  echo "<td>".$row['artist_id']."</td>";
  echo "<td>".$row['count(painting_id)']."</td>";
  echo "</tr>";
 }
?>
</tbody>
</table>
<br>
