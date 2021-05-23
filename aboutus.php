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

    <!--external javascript file-->
    <script src="js/js_common.js" type="text/javascript"></script>

     <!--icon-->
     <link href="icons/book2.png" rel="icon" type="image/icon">

      <!--external css files-->
    <link href="css/css_common.css" rel="stylesheet" type="text/css">
    <link href="css/css_aboutus.css" rel="stylesheet" type="text/css">

     <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Belleza' rel='stylesheet'>

    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Antic Slab' rel='stylesheet'>

    <link href='https://fonts.googleapis.com/css?family=Cormorant Unicase' rel='stylesheet'>


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
                <li class="nav-item active">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
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


    <!--about us section-->
    <div class="about">
      
        <div id="about_header">
            <h1 style="font-family:'Cormorant Unicase';text-decoration:none;">About Us</h1>
            <p>
            “Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers.”
            </p>
        </div>
        <div  id="about_details">
          <div class="row">
            <div class="col" style="text-align: justify;">
              <p>
              Reading the books you love is an amazing experience. Agree? However keeping them in a way where we can give them to you the moment you ask is an experience quite of the opposite kind. To keep you in love with books and also keep ourselves in a place where we don't hate books, we devised this beautiful web app known as "Library". Whenever you need a book, you can search for it. Whenever you're borrowing or returning one, you can use the web app to do so. Alongside keeping your book experience pleasant, keeping COVID-19 out is also what we aim at. You can use your own account and borrow the book you want with this app. You avoid contact with our personnel, and also we keep track of your books, all at one place!
              Experience the richness of books, and let's fall in love with them again! 
              </p>
            </div>
            <div class="col">
              <img src="images/book01.png" >

            </div>
          </div>

          </div>
            
    </div>
    <!--end of about us-->

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