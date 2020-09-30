<?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $esql="SELECT * FROM painting";
  $exrecord=mysqli_query($con,$esql);
  if(isset($_POST['buy'])){
    while($ques=mysqli_fetch_assoc($exrecord)){
        $ques['sold'] = 0;
    }
  }
?>
nipa
<!--$conn = mysqli_connect("localhost", "root", "", "gallery");
                    if (!$conn) 
	                {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else {
                      if (isset($_POST['buy']))
	                	{
                      $ = htmlentities(mysqli_real_escape_string($conn, $_POST['t_id']));
	                		
                            $select_type = "select * from types where Type_id = '$tid'";
                            $query = mysqli_query($conn, $select_type);
                            $check_type = mysqli_num_rows($query);

                            if($check_type > 0)
                            {
                            	$sql = " Delete from types where Type_id = '$tid' ";
                            	$run = mysqli_query($conn,$sql);
                            }
                    }
                    }-->