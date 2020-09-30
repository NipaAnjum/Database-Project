<html>
<?php
$db= mysqli_connect('localhost','root','');
mysqli_select_db($db,'gallery');
$sq = "SELECT * FROM painting";
$mq = mysqli_query($db,$sq) or die("not working");
if(mysqli_num_rows($mq)>=0){
    if($sq==true){
while ($row = mysqli_fetch_array($mq))
{
$id = $row['painting_id'];
  $path = $row['img_dir'];
  $pname = $row['title'];
  $pprice = $row['price'];
?>
<body>
<div class="responsive">
  <div class="gallery" style="background: rgb(238, 234, 234)">
    <a target="_blank" href="<?php echo $path?>">
      <?php echo '<img src="'.$path.'" alt="'.$pname.'" width="600" height="400">'?>
    </a>
    <div class="desc"><?php echo "<b>Painting Id:  ".$id."</b>"?></div>
    <div class="desc"><?php echo "<b>".$pname."</b>"?></div>
    <div class="desc"><?php echo "<b> Price : ".$pprice."</b>"?></div>
  </div>
</div>
<?php
}
}
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
<h3><a href="<?php echo e(action('AllPageController@index')); ?>" style="text-decoration:none">GO BACK TO HOME</a></h3>
</body>
</html><?php /**PATH C:\xampp\htdocs\demo\resources\views/pl/sql.blade.php ENDPATH**/ ?>