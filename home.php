<?php 
include 'conectarea.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>sHOEs</title>
</head>
<body>
<div class="menu">
 <div class="container">
    <div id="sezam-loader">
      <a href="home.php"><object>
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
        <path class="st0" d="M490,250.025c0,132.544-107.432,240.006-239.988,240.006C117.426,490.031,10,382.569,10,250.025
          C10,117.437,117.426,9.969,250.012,9.969C382.568,9.969,490,117.437,490,250.025z"/>
        <path class="st1" d="M205.152,264.727c-36.083,0-66.453-30.103-66.453-66.7c0-36.627,30.683-66.7,66.629-66.7
          c57.992,0,84.154,53.664,145.58,53.664c43.857,0,61.274-31.988,70.828-51.392c-2.076-0.79-4.985-1.913-6.874-2.478
          c-3.917,10.582-11.992,22.128-24.044,22.128c-30.593,0-61.564-68.701-140.444-68.701c-162.007,0-216.56,231.973-45.222,231.973
          c11.026,0,23.14,0.049,33.767,0.049c4.279,34.086,32.796,49.886,55.712,49.886c68.354,0,67.967-101.645,0.065-101.645
          c-14.002,0-26.471,0.049-36.868-0.023h-4.526l4.895-21.874c6.427,0.042,16.607,0.111,36.663,0.111
          c36.036,0,66.483,30.031,66.483,66.676c0,36.586-30.762,66.726-66.712,66.726c-58.011,0-84.167-53.737-145.623-53.737
          c-43.737,0-61.16,31.95-70.731,51.419c2.069,0.785,4.937,1.871,6.892,2.475c3.875-10.586,11.974-22.124,23.996-22.124
          c30.616,0,61.588,68.716,140.468,68.716c162.021,0,216.596-231.994,45.228-231.994c-11.074,0-23.169-0.048-33.772-0.048
          c-4.273-34.102-32.819-49.854-55.759-49.854c-68.385,0-67.932,101.613-0.019,101.613c14.002,0,24.624-0.027,35.07,0.021h6.259
          l-4.932,21.874C235.25,264.751,224.942,264.727,205.152,264.727z M294.696,316.569c14.617,0,23.821,8.4,23.821,19.083
          c0,12.046-9.499,19.324-23.887,19.324c-15.958,0-38.916-10.296-44.479-38.407C264.942,316.569,281.51,316.569,294.696,316.569z
           M205.31,191.132c-14.611,0-23.839-8.458-23.839-19.135c0-12.013,9.457-19.243,23.93-19.243c15.891,0,38.896,10.245,44.437,38.426
          C235.068,191.18,218.503,191.132,205.31,191.132z"/>
        </svg>
      </object>
      </a>
    </div>
  </div>
<header id="banner">
  <nav id="nav-main" role="navigation">
    <ul id="menu-primary-navigation" class="nav is-uppercase">
        <li class="menu-news"><a href="home.php">Home</a></li>
        <li class="menu-tour"><a href="gallery.html">Photos</a></li>
        <li class="menu-music"><a href="about.html">About</a></li>
    </ul>  
    <a href="logout.php" style="position: absolute; right: 0; width: 4vw; margin-top: 2vh; height: 4vh; color: white;"><i class="fas fa-user"></i></a>  
  </nav>
</header>
</div>
<div class="slideshow-container">

	<div class="mySlides fade">
  		<img src="img1.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
  		<img src="img2.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
  		<img src="img3.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
  		<img src="img4.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
  		<img src="img5.jpg" style="width:100%">
	</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>
<hr style="color: white; width: 90%; margin: 0 auto;">

<a href="gallery.html"><div class="circle" style="background-image: url('shoe1.jpg');"><h1>Better</h1></div></a>

<a href="gallery.html"><div class="circle" style="background-image: url('shoe2.jpg');"><h1>With</h1></div></a>

<a href="gallery.html"><div class="circle" style="background-image: url('shoe3.jpg');"><h1>Us</h1></div></a>

<hr style="color: white; width: 70%; margin: 0 auto;">

<div class="quota">
	<h1>"Good shoes take you good places"</h1>
</div>
  
 <footer class="footer-distributed">
 
    <div class="footer-left">
 
    <h3>Ultra<span>Shoes</span></h3>
 
    <p class="footer-links">
    <a href="home.php">Home</a>
  ·
    <a href="gallery.html">Gallery</a>
  ·
    <a href="about.html">About</a>
  ·
    <a href="#">Faq</a>
  ·
    <a href="#">Contact</a>
    </p>
 
    <p class="footer-company-name">ultrashoes &copy; 2019</p>
    </div>
 
    <div class="footer-center">
 
    <div>
    <i class="fa fa-map-marker"></i>
    <p><span>21 Ștefan cel Mare av.</span> Chișinău, Moldova</p>
    </div>
 
    <div>
    <i class="fa fa-phone"></i>
    <p>+373 79734444</p>
    </div>
 
    <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:valerasula16@gmail.com">contact@ulshoes.com</a></p>
    </div>
 
    </div>
 
    <div class="footer-right">
 
    <p class="footer-company-about">
    <span>About the company</span>
  Ultra SHOES is a simple advertising page. &amp; SEO Learner.
    </p>
 
    <div class="footer-icons">
 
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>
 
    </div>
 
    </div>
 
    </footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/main.js"></script>
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
  setTimeout(showSlides, 2000);
}
</script>
</body>
</html>