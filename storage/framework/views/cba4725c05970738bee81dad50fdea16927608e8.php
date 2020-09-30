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
<td><input type="integer" name='price'/></td>
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
<?php

				  /*  $conn = mysqli_connect("localhost", "root", "", "gallery");
                    if (!$conn) 
	                {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else
	                { 
	                	if (isset($_POST['confirm']))
	                	{
	                		$title = htmlentities(mysqli_real_escape_string($conn, $_POST['title']));
	                		
                            $select_type = "select * from painting where title = '$title'";
                            $query = mysqli_query($conn, $select_type);
                            while($ques=mysqli_fetch_assoc($query)){
                            $check_type = $ques['sold'];

                            if($check_type > 0)
                            {
                            	$sql = " UPDATE painting SET sold = '0' where title = '$title' ";
                            	$run = mysqli_query($conn,$sql);
                            }
                        }

                   
                    }*/
				?>
</form><?php /**PATH C:\xampp\htdocs\demo\resources\views/pages/order.blade.php ENDPATH**/ ?>