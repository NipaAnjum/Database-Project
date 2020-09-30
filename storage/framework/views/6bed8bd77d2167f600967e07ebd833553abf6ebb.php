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
    <div class="container">
  <br>
  
  <a href="<?php echo e(action('AllPageController@deleteg')); ?>"><h3> Go To Delete Gallery.</h3> </a>

<!-- GALLERY END -->
<!--EXHIBITION-->
<!--show the chart-->
<br><br><br>
  
  <a href='/admin/deletexhibition'><h3> Go To Delete Exhibition.</h3> </a>
<!--END OF EXHIBITION-->
<br><br><br>
  <!--ARTIST-->
  <!-- select operation-->
  
<br>
<a href="/admin/updateartist"><h3> Go To Delete Artist.</h3> </a>
<!--end of ARTIST-->
<br><br><br>
<!--CUSTOMER-->

  <a href="/admin/updatecustomer.blade.php"><h3> Go To Delete Customer.</h3> </a>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\demo\resources\views/admin/delete.blade.php ENDPATH**/ ?>