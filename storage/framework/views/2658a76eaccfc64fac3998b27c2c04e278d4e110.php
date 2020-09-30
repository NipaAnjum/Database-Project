<div>
  <h2>Delete From Exhibition</h2>
  <form action = "<?php echo e(action('AllPageController@exdelete')); ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Exhibition Id</td>
<td><input type="text" name='exhibition_id'/></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "delete" name="delete"/>
</td>
</tr>
</table>
</form><?php /**PATH C:\xampp\htdocs\demo\resources\views/admin/exhibitiondeleteform.blade.php ENDPATH**/ ?>