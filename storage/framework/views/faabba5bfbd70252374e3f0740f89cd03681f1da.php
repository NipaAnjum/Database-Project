<html>
<body>
<form action="<?php echo e(action('AllPageController@logcheck')); ?>" method="get">
<div class="container">
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" name="lg">Login</button> 
    </form>
</body></html><?php

/*if(isset($_POST['login'])){
    if($_POST['name']=='user' && $_POST['pass']=='user'){
        header('Location:pages/index.blade.php');
    }
    else if($_POST['name']=='admin' && $_POST['pass']=='admin'){
        header('Location:admin/index.blade.php');
    }
    else
    header('Location:login.blade.php');
}*/

?><?php /**PATH C:\xampp\htdocs\demo\resources\views/login.blade.php ENDPATH**/ ?>