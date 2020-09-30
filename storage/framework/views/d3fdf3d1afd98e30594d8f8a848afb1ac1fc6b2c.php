<div>
  <h2>Delete From Gallery</h2>
  <form action = "<?php echo e(action('AllPageController@delete')); ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Gallery Id</td>
<td><input type="text" name='gallery_id'/></td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "update" name="update"/>
</td>
</tr>
</table>
</form><?php /**PATH C:\xampp\htdocs\demo\resources\views/admin/deleteform.blade.php ENDPATH**/ ?>