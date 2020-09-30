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
<?php
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'gallery');
$sq = "SELECT * FROM painting";
$mq = mysqli_query($con,$sq) or die("not working");
while ($row = mysqli_fetch_array($mq))
{
  $path = $row['img_dir'];
  $pname = $row['title'];
  $price = $row['price'];
  $aid = $row['artist_id'];
  $painting_id = $row['painting_id'];
?>
<body>
<div class="responsive">
  <div class="gallery" style="background: rgb(238, 234, 234)">
    <a target="_blank" href="<?php echo $path?>">
      <?php echo '<img src="/image/{{'.$path.'}}" alt="'.$pname.'" width="200" height="40auto0">' ;//header('Content-type:image/jpeg');?>
    </a>
    <div class="desc"><?php echo "<b> Id: ".$painting_id."<br>Title: ".$pname."</b>"?></div>
    <div class="desc"><?php echo "<b> Price : ".$price."</b>"?></div>
  </div>
</div>
<?php
}
?>
<div>
  <h2>Order Here</h2>
  <form action = "<?php echo e(action('AllPageController@confirm')); ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Painting Id</td>
<td><input type="text" name='painting_id'/></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name='price'/></td>
</tr>
<tr>
<td>Your Id</td>
<td>
<input type="text" name='cus_id'></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Confirm" name="confirm"/>
</td>
</tr>
</table>
</form>
<div class="clearfix"></div>

<div style="padding:6px;font-family: 'Times New Roman', Times, serif;">
    <p><b> <br> An artist is a person engaged in an activity related to creating art, practicing the arts, or demonstrating an art. The common usage in both everyday speech and academic discourse is a practitioner in the visual arts only. The term is often used in the entertainment business, especially in a business context, for musicians and other performers (less often for actors). "Artiste" (the French for artist) is a variant used in English only in this context; this use is becoming rare. Use of the term to describe writers, for example, is valid, but less common, and mostly restricted to contexts like criticism. </b></p>
  <p><b> Bangladeshi art is a form of visual arts that has been practiced throughout the land of what is now known as Bangladesh. Bangladeshi art has a perennial history which originated more than two thousand years ago and is practiced even to this date. Among the various forms of Bangladeshi art, photography, architecture, sculpture and painting are the most notable. <br> <br></b></p></div>



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
</html><?php /**PATH C:\xampp\htdocs\demo\resources\views/pages/gallery.blade.php ENDPATH**/ ?>