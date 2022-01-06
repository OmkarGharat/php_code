<?php
		session_start();

		if(!isset($_SESSION['username'])){ // if u click on logout btn present in homepage.php
			header("location: signin_form.php");
		}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Portfolio Website | Code4education </title>
  <link rel="stylesheet" href="style.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homepage.css">
</head>

<body>

  <!-- Move to up bottom -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>

  <!-- navigation menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Portfolio.</a></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <div class="media-icons">
        <button><a href="logout.php" style="color : #ff2f00">Logout</a></button>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

  <!-- Home Section Start -->
  <section class="home" id="home">
    <div class="home-content">
      <div class="text">
        <div class="text-one">Hello,</div>
        <!-- <div class="text-two">I'm John Wick</div> -->
        <div class="text-two">I'm <?php echo $_SESSION['username']  ?></div>
        <div class="text-three">Frontend Developer</div>
        <div class="text-four">From United Kingdom</div>
      </div>
      <div class="button">
        <button>Hire Me</button>
      </div>
    </div>
  </section>


  <!-- Footer Section Start -->
  <footer>
    <div class="text">
      <span><a href="#">254brady</a> | © 2015-2021 All Rights Reserved.</span>
    </div>
  </footer>



  <script src="script.js"></script>
</body>

</html>