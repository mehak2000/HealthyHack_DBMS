<?php
session_start();
?>

<html>
  <head>
    <title> About | Healthy Hack </title>
  </head>
  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <body>
  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };
      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Healthy Hack</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
<?php

if(isset($_SESSION['login_user1'])){
?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Area </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {
  ?>
<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>       
            </ul>
            </li>
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
            </ul>
            </li>
          </ul>
<?php
}
?>
        </div>
      </div>
    </nav>
    <div class="wide">
	<div class="tagline">EAT HEALTHY<font color= "green"><strong></strong></font><br><br>LIVE LONG<font color= "red"><strong></strong></font></div>
    </div>

    <div class="paragraph1">
      <h1>OUR TEAM</h1>
      <h3><p>Healthy Hack was founded in 2020. We care about YOU and YOUR HEALTH. And so we provide variety of healthy foods.</p></h3>
    </div>

    <div class="col-xs-12 line"><hr></div>
    <div class="col-md-10" style="float: none; margin: 0 auto;">
        <div class="paragraph2">
          <h1><center>WHY CHOOSE HEALTHY HACK?</center></h1>
          <p><br>
          <div class="goldcolor">
          <h2>1. Healthy food easily available online </h2>
          </div> 
          </p>
          <p><br>
          <div class="goldcolor">
          <h2>2. A perfect food guidance</h2>
          </div>
          </p>
          <p><br>
          <div class="goldcolor">
            <h2>3. Multiple orders possible</h2>
            </div>
          </p>
          <p><br>
          <div class="goldcolor">
            <h2>4. Home-made also available</h2>
            </div>
          </p>
        </div>
    </div>

    <div class="col-xs-12 line"><hr></div>
    <div class="paragraph1">
    <h1><strong> ABOUT US </strong></h1>
    <h3>
      <p>
        The purpose of HEALTHY HACK is to automate the existing manual system by the help of computerized equipments and full-fledged computer software, fulfilling their requirements, so that their valuable data/information can be stored for a longer period with easy accessing and manipulation of the same. 
      </p>
      <p>
	<Due to lot of stress regarding work, we barely get any time to cook. And we tend to order junk online thereby deteriorating our health. But don't worry, <font color="green"><strong>Healthy Hack</strong></font> is there to look after you :)   
      </p>
      <p>
        We would not only provide you with healthy and tasty food but also guide you about the dietary needs. 
      </p>	
    </h3>  
    </div>

    <div class="col-xs-12 line"><hr></div>   
  <div class="paragraph1">
    <h2><strong><div class="darkgoldcolor">Helping people discover great places around them.</div></strong></h2>
    <h3>Our team gathers informations from every restaurant on a regular basis to ensure our data is fresh. Our vast community of food lovers share their revies and photos, so you have all that you need to make an informed choice.</h3>
    </p>
    <p><br>
      <h2><strong><div class="darkgoldcolor">Enabling restaurants to create amazing experiences.</div></strong></h2>
      <h3>With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences</h3>
    </p>
  </div>
         </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Healthy Hack 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>