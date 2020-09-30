<body>
<div class="header">
       <h1> <a href="index.php" style="text-decoration:none"><i class="fas fa-palette"></i>  CANVAS</a></h1>
    </div>
    <div style="font-family:Georgia, 'Times New Roman', Times, serif">
        <ul>
        <li><a href="<?php echo e(action('AllPageController@index')); ?>">Home</a></li>
            <li><a href="<?php echo e(action('AllPageController@showgallery')); ?>">Gallery</a></li>
            <li><a href="<?php echo e(action('AllPageController@showartist')); ?>">Artists</a></li>
            <li><a href="<?php echo e(action('AllPageController@showexhibition')); ?>">Exhibitions</a></li>
            </ul>
    </div>
    </body>
    <?php /**PATH C:\xampp\htdocs\demo\resources\views/partials/nav.blade.php ENDPATH**/ ?>