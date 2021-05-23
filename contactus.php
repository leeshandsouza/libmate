<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!--jquery google cdn-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--external css files-->
    <link href="css/css_common.css" rel="stylesheet" type="text/css">
    <link href="css/css_contactus.css" rel="stylesheet" type="text/css">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Belleza' rel='stylesheet'>
    

    <link href='https://fonts.googleapis.com/css?family=Cherry Cream Soda' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>


    <!--external javascript file-->
    <script src="js/js_common.js" type="text/javascript"></script>

     <!--icon-->
     <link href="icons/book2.png" rel="icon" type="image/icon">

    <title>LibMate</title>
  </head>
  <body>
   
       <!-- header -->
<header id="nav-header">

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" style="height:70px;">
    <!-- Navbar content -->


    <a class="navbar-brand" href="home.php">
        <img src="icons/book2.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        <a class="navbar-brand" href="home.php">LibMate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      </a>

    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
        <li class="nav-item ">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="books.php">Books</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link " href="contactus.php">Contact Us</a>
        </li>
        
        
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search_key" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="mx-2" id="logButton">
        <?php
        if(isset($_SESSION["name"]))
        {
          
          if($_SESSION['name']!='admin'){
            $name = $_SESSION['name'];
          $phone = $_SESSION['phone'];
          $email = $_SESSION['email'];
          $userid= $_SESSION['userid'];
          echo'
          <a href="userdetail.php" data-toggle="tooltip" data-placement="bottom" title="'.$name.'"><img src="icons/top-icon.png"></a>
        </div>
        ';
        }
        else{
          $name = $_SESSION['name'];
          $email = $_SESSION['email'];
          $phone="";
          $userid="";
          echo'
          <a href="admin.php" data-toggle="tooltip" data-placement="bottom" title="'.$name.'"><img src="icons/top-icon.png"></a>
        </div>
        ';
        }

        }
        else{
          echo '<a class="btn btn-success" href="login.html" role="button">LogIn</a>
          <a class="btn btn-primary" href="reg.html" role="button">SignUp</a>
          
        ';
        }
        ?>
          
        </div>
        </div>          

  </nav>

</header>
<!--end of header -->

    <!--end of header -->

     <!--heading-->
     <div class="head-container">
        <div class="row">
            <img src="images/banner04.jpg" alt="...">
            <div class="head-text">
                <p>                    
                    CONTACT US
                </p>
            </div>

        </div>
    </div>
    <!--end of the heading-->


    <!--address details-->
    <section id="address">
        <p>&nbsp;</p>
    <div class="media">
        <div class="media-body">
          <h5 class="mt-0 mb-1">Reach Us At</h5>
          <p id="addDetails">
            Nitte, Karkala Taluk,<br>
            Udupi - 574110<br>
            Karnataka, India<br>
            +91 – 8258 – 281263 / 281264 / 281248<br>
            / 281461 / 281462 / 281463 / 281349<br>
            +91 - 8258 - 281039<br>
            library_nmamit@nitte.edu.in<br>
            <a href="https://www.nmamit.nitte.edu.in">www.nmamit.nitte.edu.in</a><br>
        </p>
        </div>
        <img src="icons/book1.png" class="align-self-center mr-3" alt="library" style="width:25%;">
      </div>
      <p>&nbsp;</p>
    </section>

    <!--map section-->

    <div id="mapsection">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15538.692250656684!2d74.9339327!3d13.183002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10b77ac6f6afc7fa!2sN.M.A.M.%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1605286307352!5m2!1sen!2sin" width="1540" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

  <!--end of map section-->

  <!--footer section-->
  <footer>
    <div class="row">
        <div id="follow" class="col">
              <div  class="row">
                <div class="col">
                 <h2>Stay Connected</h2> 
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <ul id="icons_sm" class="list-group list-group-horizontal-sm ">
                    <a href="https://www.facebook.com" ><li class="list-group-item" data-toggle="tooltip" data-placement="bottom" title="Follow us on Facebook"><img src="https://www.flaticon.com/svg/static/icons/svg/1384/1384053.svg"></li></a>
                    <a href="https://www.twitter.com"><li class="list-group-item" data-toggle="tooltip" data-placement="bottom" title="Follow us on Twitter"><img src="https://www.flaticon.com/svg/static/icons/svg/733/733579.svg"></li></a>
                    <a href="https://www.linkedin.com"><li class="list-group-item" data-toggle="tooltip" data-placement="bottom" title="Follow us on Linkedin"><img src="https://www.flaticon.com/svg/static/icons/svg/1409/1409945.svg"></li></a>
                    <a href="https://www.instagram.com"><li class="list-group-item" data-toggle="tooltip" data-placement="bottom" title="Follow us on Instagram"><img src="https://www.flaticon.com/svg/static/icons/svg/174/174855.svg"></li></a>
                  </ul>
              </div>
            </div>

        
        </div>
        <div id="footerCon" class="col">
          <div class="row">
            <div class="col">
              <h2>Contact us</h2>
              <ul class="list-group list-group-flush">
                <li class="list-group-item" data-toggle="tooltip" data-placement="bottom" title="Call Us"><p><img src="https://www.flaticon.com/svg/static/icons/svg/523/523081.svg"><span style="padding-left: 30px;font-size: 1.5vw;color:white;">+91 - 8258 - 281039</span></p></li>
                <a href="https://www.gmail.com"><li class="list-group-item" data-toggle="tooltip" data-placement="bottom" title="Mail Us"><p><img src="https://www.flaticon.com/svg/static/icons/svg/732/732200.svg"><span style="padding-left: 30px;font-size: 1.5vw;color:white;">library_nmamit@nitte.edu.in</span></p></li></a>
              </ul>
            </div>
          </div>

        </div>
        </div>
        <div id="copyright_sec">
          <p> <small id="copyright">&copy Copyright 2020. All Rights Reserved.</small></p>
        </div>
           
         
    
  </footer>
<!--end of footer-->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>