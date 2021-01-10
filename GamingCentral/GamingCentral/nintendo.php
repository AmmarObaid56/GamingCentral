<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>

<head>
<!--The Name of the tab -->
<title> GamingCentral Home Page </title>
<!-- Connects to css -->
<link rel="stylesheet" href="index.css">

<!--This allows the search icon to work-->
<link rel="stylesheet" type = "text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!--This allows the icons to work -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>

  <body style = "background:url(backgroundimg.jpg);  margin = 0; padding = 0; background-size:cover; background-position: center; font-family: sans-serif;">

      <div align= "left" style = "margin-left: 9em">
       <a href = "index.php"> <img src = "OBIGaming.png" height = "148px" width = "200px"  class = "img1" style = "margin-left: 8em; background:#E7E7E7; border:1px solid black" alt="OBI World Logo"></img></a>
       <br></br><br></br>
        <h1 style="margin-left:16em; margin-top:-14px">Cheapest Games on Demand </h1>
      </div>
      <br><br>

<!-- NavBar -->
<div class="topnav">
    <a href = "index.php"class = "home" alt = "home"> <i class="fas fa-home"></i> Home</a>
    <a href = "xbox.php" class = "xbox" alt = "xbox"> <i class="fab fa-xbox"></i>box</a>
    <a href = "playstation.php" class = "playstation" alt = "playstation"> <i class="fab fa-playstation">laystation</i></a>
    <a href = "nintendo.php" class = "nintendo" alt = "nintendo"><i class="fas fa-gamepad"></i> Nintendo </a>
    <a href = "pc.php" class = "pc" alt = "PC"> PC <i class="fas fa-desktop"></i></a>
    <a href = "vr.php" class = "vr" alt = "VR"> VR <i class="fas fa-vr-cardboard"></i></a>
    <a href = "accessories.php" class = "accessories" alt = "Accessories"> Accessories <i class="fas fa-tshirt"></i></a>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction()">
      <?php echo htmlspecialchars($_SESSION["username"]); ?> <i class="fas fa-user"></i>
      </button>
      <div class="dropdown-content" id="myDropdown">
        <a = href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <a href = "test.php?page=cart" class = "shop" alt = "Shopping Cart"><i class="fas fa-shopping-cart"></i> Cart</a>

    <!-- Search bar and button -->
    <div class="search-container">
        <form action="search.php" method = "post">
          <input type = "text" id = "searchBox" name = "search" placeholder = "Search..." onfocus="this.placeholder=''" onblur = "this.placeholder='Search...'" class = "search">
          <button type="submit" name = "submit"><i class="fa fa-search"></i></button>
        </form>
</div>
</div>
<!--puts space between navbar and image -->
<br> </br>

<!-- Image Slide Show -->

<div class="slideshow-container">

<div class="mySlides fade">
  <a href = "http://localhost/GamingCentral/test.php?page=product&id=9"><img src="http://images.nintendolife.com/6dbcd1f074029/mua3.original.jpg" style="width:1307px; height:500px" alt="Modern Warfare"></a>
  <div class="text"<a href = "http://localhost/GamingCentral/test.php?page=product&id=9"><button class="button button2">View Details </button></div>
</div>

<div class="mySlides fade">
  <a href = "index.php"><img src="https://media.melty.fr/article-3955766-ajust_1020/les-deux-pokemon-legendaires-d-epee-et-bouclier.jpg" style="width:1307px; height:500px" alt="image of Kirby Star Allies"></a>
  <div class="text"><a href = "index.php"><button class="button button2">Veiw Details </button></div>
</div>

<div class="mySlides fade">
  <a href = "index.php"><img src="https://i.gadgets360cdn.com/large/super_smash_bros_ultimate_nintendo_switch_cover_1534157121839.jpg" style="width:1307px; height:500px" alt="image of Super Smash Bros Ultimate"></a>
  <div class="text"><a href = "index.php"><button class="button button2">Veiw Details </button></div>
</div>

<div class="mySlides fade">
  <a href = "index.php"><img src="http://static1.squarespace.com/static/58625bcbe6f2e152e75f6b6d/58625c943f405818f1364d98/5beec5a170a6ad0437b7d89f/1542378625197/pokemonletsgoeeveepikachulogo.jpg?format=1500w" style="width:1307px; height:500px" alt="image of Pokemon Lets Go "></a>
  <div class="text"><a href = "index.php"><button class="button button2">Veiw Details </button></div>
</div>

<div class="mySlides fade">
  <a href = "index.php"><img src="https://cdn.nintendoreporters.com/storage/files/super-dragon-ball-heroes-world-mission-tv-commercial.jpg" style="width:1307px; height:500px" alt="image of Super Dragon Ball Heroes"></a>
  <div class="text"><a href = "index.php"><button class="button button2">Veiw Details </button></div>
</div>

<div class="mySlides fade">
  <a href = "index.php"><img src="https://hb.imgix.net/c0bd4406c623f080a21fa7a9bd3ac28b2212f3f6.jpg?auto=compress,format&fit=crop&h=353&w=616&s=d43c0f2fafd06dd2ef8800ea762e32d5" style="width:1307px; height:500px" alt="image of Mario Kart Deluxe 8"></a>
  <div class="text"><a href = "index.php"><button class="button button2">Veiw Details </button></div>
</div>

<!-- Prev and Next buttons -->
  <a class = "prev" onclick = "plusSlides(-1)"></a>
  <a class = "next" onclick = "plusSlides(1)"></a>
</div>

<br>
<div class = "movingimgs"  style = "margin-top:-50px">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>

    </body>

    </html>
    <?php

    // Include functions and connect to the database using PDO MySQL
    include 'functions.php';
    $pdo = pdo_connect_mysql();
    // Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
    $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
    // Include and show the requested page
    include $page . '.php';
    ?>
