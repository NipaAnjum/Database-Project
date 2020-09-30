<div>
  <h2>Update Gallery</h2>
  <form action = "{{action('AllPageController@edit')}}" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Gallery Id</td>
<td><input type="text" name='gallery_id'/></td>
</tr>
<tr>
<td>Gallery Name</td>
<td><input type="text" name='gallery_name'/></td>
</tr>
<tr>
<td>Location</td>
<td>
<input type="text" name='gallery_location'></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "update" name="update"/>
</td>
</tr>
</table>
</form>