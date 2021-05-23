<?php

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--jquery google cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--external stylesheets-->
    <link rel="stylesheet" href="css/css_home1.css" type="text/css">

    <!--owl carousel-->
    <link href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css" rel="stylesheet" type="text/css">

    <!--external js files-->
    <script src="js/js_common.js" type="text/javascript"></script>

    <!--icon-->
    <link href="icons/book2.png" rel="icon" type="image/icon">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiri' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Antic Slab' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Literata' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Della Respira' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Belleza' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Corben' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Coustard' rel='stylesheet'>

    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Unicase' rel='stylesheet'>



    <!--owl carousel styling css-->
    <style type="text/css">
      .item{
          margin:2%;
          padding:2%;
          width:100%;
          height:auto;
          margin-top:11%;
          min-height: 100px;

      }
      .img-fluid{
          max-width: 100%;
          height:100%;
          display: block;
      }

    </style>

    <style>

      .carousel-caption h5,.carousel-caption p{
        color:white;
        text-shadow:2px 1px 1px rgb(219, 33, 89);
        font-size:bolder;
        font-family:"Aclonica";
        font-size:1.5vw;
      }

      #books_header{
        font-family:"Cinzel Decorative";
        word-spacing: 25px;
      }
      .card img{
        width:100%;
        height:auto;
        
      }
      
    .card{
        margin:5.5%;
        padding:2%;
        
    }
    .card-title{
      font-size:1.5vw;
    }
    th,td{
      padding:0
    }
    </style>

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
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
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
                
    <!-- carousel section-->
    <section id="carousel1">


        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/banner02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Read Books!</h5>
                  <p>Because not all knowledge you get is true.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner07.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Embrace them</h5>
                  <p>Because a book's hug is way more precious.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Reccomend them</h5>
                  <p>Knowledge shared is knowledge doubled.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner09.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Take care of them</h5>
                  <p>They maybe lifeless, but they speak to us. So take care of them.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <!--end of carousel-->


    <!--top picks section owl carousel-->
    <section id="books">
      <div id="books_header">OUR TOP PICKS</div>
      <div class="owl-carousel owl-theme" style="background-image: url(images/bg11.jpg);">
        <div class="item">
          <div class="card">
          <img src="images/bk01.jpeg" class="card-img-top" alt="bk01">
          <div class="card-body">
            <h5 class="card-title">Science & Technology</h5>
            <p class="card-text">

              <table class="table table-sm table-borderless">
                <tbody>
                <tr>
                  <th>Author</th>
                  <td>Agrahari Ravi P.</td>
                </tr>
                <tr>
                  <th>Language</th>
                  <td>English</td>
                </tr>
                <tr>
                  <th>Genre</th>
                  <td>Science</td>
                </tr>
              </tbody>
              </table>
            </p>
            <a href="#" class="btn btn-primary">Check This Out</a>
          </div>
        </div>
      </div>
        <div class="item">
          <div class="card">
            <img src="images/bk02.jpg" class="card-img-top" alt="form">
            <div class="card-body">
              <h5 class="card-title">Atomic Habits</h5>
              <p class="card-text">
                <table class="table table-sm table-borderless">
                  <tbody>
                  <tr>
                    <th>Author</th>
                    <td>James Clear</td>
                  </tr>
                  <tr>
                    <th>Language</th>
                    <td>English</td>
                  </tr>
                  <tr>
                    <th>Genre</th>
                    <td>Business</td>
                  </tr>
              </tbody>
                </table>
                </p>
                <a href="#" class="btn btn-primary">Check This Out</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card" >
            <img src="images/bk03.jpg" class="card-img-top" alt="form">
            <div class="card-body">
              <h5 class="card-title">A Time for Mercy</h5>
              <p class="card-text">
                <table class="table table-sm table-borderless"><tbody>
                  <tr>
                    <th>Author</th>
                    <td>John Grisham</td>
                  </tr>
                  <tr>
                    <th>Language</th>
                    <td>English</td>
                  </tr>
                  <tr>
                    <th>Genre</th>
                    <td>Fiction</td>
                  </tr></tbody>
                </table>
                </p>
                <a href="#" class="btn btn-primary">Check This Out</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card" >
            <img src="images/bk04.jpg" class="card-img-top" alt="form">
            <div class="card-body">
              <h5 class="card-title">Hacking: The Underground Guide to Computer Hacking</h5>
              <p class="card-text">
                <table class="table table-sm table-borderless"><tbody>
                  <tr>
                    <th>Author</th>
                    <td>Abraham K White</td>
                  </tr>
                  <tr>
                    <th>Language</th>
                    <td>English</td>
                  </tr>
                  <tr>
                    <th>Genre</th>
                    <td>Technology</td>
                  </tr></tbody>
                </table>
                </p>

                <a href="#" class="btn btn-primary">Check This Out</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card" >
            <img src="images/bk05.jpg" class="card-img-top" alt="form">
            <div class="card-body">
              <h5 class="card-title">JavaScript: The Definitive Guide</h5>
              <p class="card-text">
                <table class="table table-sm table-borderless"><tbody>
                  <tr>
                    <th>Author</th>
                    <td>David Flanagan</td>
                  </tr>
                  <tr>
                    <th>Language</th>
                    <td>English</td>
                  </tr>
                  <tr>
                    <th>Genre</th>
                    <td>Technology</td>
                  </tr></tbody>
                </table>
                </p>
                <a href="#" class="btn btn-primary">Check This Out</a>
            </div>
          </div>
        </div>
    </div>
    </section>
    <!--end of book section-->

    
    <!--about us section-->
    <div class="about" style="border-top:5px black solid">
      
        <div id="about_header">
            <h1 style="font-family:'Cormorant Unicase';text-decoration:none;">About Us</h1>
            <p>
            “Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers.”
            </p>
        </div>
        <div  id="about_details">
          <div class="row">
            <div class="col">
              <p>
              Reading the books you love is an amazing experience. Agree? However keeping them in a way where we can give them to you the moment you ask is an experience quite of the opposite kind. To keep you in love with books and also keep ourselves in a place where we don't hate books, we devised this beautiful web app known as "Library". Whenever you need a book, you can search for it. Whenever you're borrowing or returning one, you can use the web app to do so. Alongside keeping your book experience pleasant, keeping COVID-19 out is also what we aim at. You can use your own account and borrow the book you want with this app. You avoid contact with our personnel, and also we keep track of your books, all at one place!
              Experience the richness of books, and let's fall in love with them again!
              </p>
            </div>
            <div class="col">
              <img src="images/book01.png" style="width:75%">

            </div>
          </div>

          </div>
            
    </div>
    <!--end of about us-->

    <!--contact us section-->
  <div id="contactus">

    <div id="contactus_details">
      <div  class="row">
        <div class="col">
          <h1 id="contact_header">FEEDBACK</h1>
        </div>
      </div>
      <div id="form1" class="row">
        <div class="col">

          <form name="contactForm" id="contactForm" action="feedback.php" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <!--
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
              -->
            <div class="form-group">
              <label for="msg">Message</label>
              <textarea id="msg" rows="4" cols="50" name="msg" class="form-control" form="contactForm"></textarea>
            </div>
            <!--
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="check">
              <label class="form-check-label" for="check">Check me out</label>
            </div>
          -->
          <div class="text-center" style="margin-top:3%;">
            <button type="submit" class="btn btn-primary btn-lg ">Submit</button></div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <!--contact us ends-->

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

    <!--owl carousel-->
    <script type="text/javascript" src="OwlCarousel2-2.3.4\docs\assets\vendors\jquery.min.js"></script>
    <script type="text/javascript" src="OwlCarousel2-2.3.4\dist\owl.carousel.js"></script>

    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
})
  </script>

  </body>
</html>