<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

 
</head>
<body>
<header>
        <div class="main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs.php">About Us</a></li> 
                <li><a href="ContactUs.php">Contact Us</a></li>  
                <li><a href="News.php">News</a></li>
                <button class="btn"><a href="register_form.php">LOGIN</a></button>
            </ul>
        </div>
    </header> 
    <br><br><br><br><br><br>

    <div class="slideshow-container">

    <div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="photo1.jpg" style="width:100%">
  <div class="text">Caption One</div> 
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="photo2.jpg" style="width:100%">
  <div class="text">Caption Two</div> 
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="photo3.jpg" style="width:100%">
  <div class="text">Caption Three</div> 
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="photo4.jpg" style="width:100%">
  <div class="text">Caption Four</div> 
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="photo5.jpg" style="width:100%">
  <div class="text">Caption Five</div> 
</div>



</div>
<br>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span>
</div>

  
   <br>
   <script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
</body>
</html>