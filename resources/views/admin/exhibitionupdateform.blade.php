<div>
  <h2>Delete From Gallery</h2>
  <form action = "{{action('AllPageController@editex')}}" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Start Date</td>
<td><input type="text" name='exhibition_id'/></td>
</tr>
<tr>
<td>End Date</td>
<td><input type="text" name='exhibition_name'/></td>
</tr>
<tr>
<td>Exhibition Location</td>
<td><input type="text" name='exhibition_name'/></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "update" name="update"/>
</td>
</tr>
</table>
</form>