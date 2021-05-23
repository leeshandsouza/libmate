<?php

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!--jquery google cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--external stylesheets-->
    <link rel="stylesheet" href="css/css_books.css" type="text/css">

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

    <style>

.nav-link, .navbar-brand{
    font-family: 'Aref Ruqaa';
    font-size: 1.5vw;
}
body {
    background-image: url(images/bg13.jpg);
    background-size: auto;
    background-attachment: fixed;
      
}

#logButton a{
    margin-left:15px;
    font-family: "Aref Ruqaa";
}

#form1{
    font-family: "Della Respira";
    font-size: 1.5vw;
    
}

li img{
    width:30px;
    height:30px;
}

#copyright_sec{
    background-color: rgba(0,0,0,0.7);
    color: white;
    font-family: "Alegreya SC";
    text-align: center;
    font-size: 2vw;
}

.col h2, .col ul{
    padding-top:20px;
    padding-left:20px;
    font-family: "Belleza";
  
}
.col li{
    background-color: rgba(160, 160, 160, 0);
}

footer{
    background-image:url(images/fbg02.jpg);
    opacity:0.9;
    margin-top: 20px;
}

.card img{
    width:100px;
    height:350px;
    padding:20px;
}

.card{
    margin:30px;
    
}

.form-group input:focus{
background-color: rgb(181, 218, 235);
}
.form-group input{
    font-weight: bold;
    font-size:1.25vw;
    color:black;
    font-family: "Adamina";
}
.list-group-item{
    border:0;
    
}
.list-group-item img{
    width:50px;
    height:40px;
    
}

#follow h2, #footerCon h2{
    margin-left:30px;
    color:white;
    
}

#books {
    background-color: rgba(173, 160, 140, 0.521);
    margin-top: 5rem;

}
#books_res {
    background-color: rgba(173, 160, 140, 0.521);
    margin-top: 5rem;

}
.text {
    font-weight: bold;
}
#search_res {
    margin-top:5rem;
    background: rgba(251, 255, 254, 0.61);
    border-radius: 10px;
}

#search_text {
  font-weight: bold;
    font-size:1.7vw;
    color:black;
    font-family: "Adamina";
}

#not_found {
    height: 30rem;
    margin-left: 15rem;
}


.caro_img {
    width: 100%;
    height: 70vh;
}
/*
flip card
*/
.card-flip > div {
    backface-visibility: hidden;
    transition: transform 300ms;
    transition-timing-function: linear;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    display: flex;
  }
  
  .card-front {
    transform: rotateY(0deg);
    word-wrap: normal;
  }
  
  .card-back {
    transform: rotateY(180deg);
    position: absolute;
    word-wrap: normal;
    
  }
  
  .card-flip:hover .card-front {
    transform: rotateY(-180deg);
  }
    
  .card-flip:hover .card-back {
    transform: rotateY(0deg);
  }

  .card {
      height: 15rem;
      border-radius: 10px;
  }
  .card-title {
    font-size: 2rem;
    word-wrap: break;

  }

  .card-text {
    font-size: 1rem;
    word-wrap: break;
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
        <li class="nav-item active">
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

<div class="container-fluid" id="books">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/books_c1.jpg" class="caro_img" alt="Los Angeles">
        </div>
    <div class="carousel-item">
      <img src="images/books_c2.jpg" class="caro_img" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/books_c3.jpg" class="caro_img" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
<div class="container-fluid" id="books_res">
<div class="row">

<!--filter modal-->
<button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#myModal">
Filters

</button>

<!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Filters</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            
            <!--filters form-->
            <form class="form-group" method="get" action="books.php#books_res">
                
                
                <div class="alert alert-info">
                    <strong>Genre</strong> <br> select the genre from the list
                </div>
                
                <select id="genre" class="form-control" name="genrename">
                <option selected disabled>none</option>
                <option value="cs">Computer Science</option>
                <option value="scifi">Sci-Fi</option>
                <option value="science">Science</option>
                <option value="cl">classics</option>
                <option value="romance">Romance</option>
                <option value="fiction">fiction</option>
                </select>
                <br>
                <div class="alert alert-info">
                <strong>Include out of stock</strong> <br> Check to show out of stock books in the results.
                <input type="checkbox" class="form-control" name="outof" value="true">
                </div>
                <br>
                <div class="alert alert-info">
                <strong>Sort by Book name</strong> <br> Alphabetically sort by book name
                <input type="checkbox" class="form-control" name="sortname" value="true">
                </div>
                <br>

                <input type="submit" class="btn btn-danger m-2" value="apply">
            </form>
                
      <!--Modal footer --> 
        <div class="modal-footer">
            <form class="form-group" method="get" action="books.php">
            <input type="submit" class="btn btn-info" value="clear" >
            </form>
      </div>
      </div>
    </div>
  </div>
</div>


</div>
<?php 
//connection to db
$con = new mysqli("localhost","root","","library");   
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//function for printing the books as flipping cards, takes result set as args
function bookprint($result)
{
    $rowcount=mysqli_num_rows($result);

    //check if logged in and set url according to that for borrow button
    if(isset($_SESSION['name']))
    {
    $url="userdetail.php#borrowButton";
    }
    else 
    {
    $url="login.html";
    }

    if($rowcount==0)
    {
    echo ' <div class="well" >
    <div class="alert alert-warning">
    <strong>No books found</strong> There were no books found for the given search. 
    </div>
    <img src="images/result_not_found.png" class="img-circle"  id="not_found" alt="No results found">
    <p class="text-lg-left" id="search_text">
    Please search for another book, we have plenty of them! We are sure you wont be dissapointed.
    </p>
    </div>
    ';
    }
    else {
    echo '<div class="row">';
    while($row = mysqli_fetch_array($result)) {
        echo '
        <div class="col-sm-4 col-lg-4 card-group ">
            <div class="card card-flip h-80 bg-white">
                        <div class="card-front text-white bg-dark">
                            <div class="card-body">
                                <i class="fa fa-search fa-5x float-right">Book</i>
                                <h3 class="card-title">'.$row['bookname'].'</h3>
                                <p class="card-text">This book has been written by: '.$row['author'].'</p>
                            </div>
                        </div>
                        <div class="card-back bg-white">
                            <div class="card-body ">
                                <h3 class="card-title">'.$row['bookname'].'</h3>
                                <p class="card-text">Number of books left in stock: '.$row['quantity'].'.  </p>
                                <a href='.$url.' class="btn btn-outline-secondary">Borrow</a>
                            </div>
                        </div>
            </div>
        </div>';
    }
    echo '</div>';
}
}

//function which displays only the books which are selected in filter
function display()
{
    $genre=$_GET['genrename'];
    $con1 = new mysqli("localhost","root","","library");
    $sql="SELECT * from book,genre where bookid=bid AND genrename LIKE '%{$genre}%' AND quantity>0";
    if(isset($_GET['outof']))
    $sql="SELECT * from book,genre where bookid=bid AND genrename LIKE '%{$genre}%'";
    if(isset($_GET['sortname']))
    $sql="SELECT * from book,genre where bookid=bid AND genrename LIKE '%{$genre}%' AND quantity>0 order by bookname";
    if(isset($_GET['sortname'])&&isset($_GET['outof']))
    $sql="SELECT * from book,genre where bookid=bid AND genrename LIKE '%{$genre}%'order by bookname";
    $result= mysqli_query($con1,$sql);
    bookprint($result);
}

//to clear the filter and display all books
if(isset($_GET['clear']))
{
    goto printall;
}



//if genrename filter is given
if(isset($_GET['genrename']))
    display();

//display all books by default
else {
    printall:
    if(isset($_GET['outof']))
    $sql="SELECT * FROM book";
    else if(isset($_GET['sortname']))
    $sql="SELECT * FROM book WHERE quantity>0 order by bookname";
    else if(isset($_GET['sortname'])&&isset($_GET['outof']))
    $sql="SELECT * FROM book order by bookname";
    else
    $sql="SELECT * FROM book WHERE quantity>0 ";
    $result = mysqli_query($con,$sql);
    bookprint($result);
}
   
?>
</div>
<!--books pane ends-->

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
