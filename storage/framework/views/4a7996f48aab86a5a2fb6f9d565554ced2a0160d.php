<?php $__env->startSection('content'); ?>
<!DOCTYPE html>

    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

         
 
    <div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="<?php echo e(asset('images/homeimg/'.'dwnld2.jpg')); ?>" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'dwnld3.jpg')); ?>" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'sk.jpg')); ?>" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
<br>
    <div class="about">
        <h2>ABOUT</h2>
        <img src="<?php echo e(asset('images/homeimg/'.'bd.jpg')); ?>">
        <p>Canvas features the world's leading galleries,sculptures,artist estates,art fairs,exhibitions,all in one place. Our growing 
database of 1,000,000 works of art,architecture,and artists from our country. Canvas is used by art lovers,students,and 
educators to discover,learn about,and collect art.
        </p>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo\resources\views/index.blade.php ENDPATH**/ ?>