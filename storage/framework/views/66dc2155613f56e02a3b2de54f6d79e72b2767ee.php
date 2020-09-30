<div class="slideshow-container">

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'dwnld2.jpg')); ?>" style="width:100%">
  <div class="text"><h3>Best Collection of Paintings</h3></div>
</div>

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'dwnld3.jpg')); ?>" style="width:100%">
  <div class="text"><h3>Thousands of Artists</h3></div>
</div>

<div class="mySlides fade">
  <img src="<?php echo e(asset('images/homeimg/'.'sk.jpg')); ?>" style="width:100%">
  <div class="text"><h3>Exhibitions Near You</h3></div>
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
</script><?php /**PATH C:\xampp\htdocs\demo\resources\views/partials/slide.blade.php ENDPATH**/ ?>