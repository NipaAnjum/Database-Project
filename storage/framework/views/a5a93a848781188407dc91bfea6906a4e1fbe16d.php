<?php
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'gallery');
  $psql="CREATE view artistOfexhibition as
  SELECT artist_id FROM painting
  UNION
  SELECT artist_id FROM exhibition";
  $r=mysqli_query($con,$psql);
  $cd="SELECT artistOfexhibition.artist_id,exhibition.exhibition_name FROM artistOfexhibition join exhibition on artistOfexhibition.artist_id=exhibition.artist_id";
  //$cd = "SELECT artist_id from artistOfexhibition join exhibition_name from exhibition where exhibition.artist_id=artistOfexhibition.artist_id";
  $pap = mysqli_query($con,$cd);
  ?>
<h3>PARTICIPANTS</h3>
<table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Exhibition </th>
      <th>Artist Id </th>
      </tr>
    </thead>
    <tbody>
    <?php

while($ques=mysqli_fetch_assoc($pap))
{
  echo "<tr>";
  echo "<td>".$ques['exhibition_name']."</td>";
  echo "<td>".$ques['artist_id']."</td>";
  echo "</tr>";
} 
?>
</tbody>
</table><?php /**PATH C:\xampp\htdocs\demo\resources\views/test.blade.php ENDPATH**/ ?>