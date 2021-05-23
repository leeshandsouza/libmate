<?php

session_start();

if($_SERVER['REQUEST_METHOD']!='POST'){
  echo "<script> 
  alert('Unauthorised Access!');
  window.location.href='home.php';</script>";
  session_write_close();
}

$_SESSION['page'] = "reg.html";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $pass= test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//database details
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

  //check if user with same username exists in db
$sql = "SELECT * FROM libuser WHERE email = '".$email."';";
$result = mysqli_query($conn,$sql);

if(mysqli_fetch_row($result)!=null)
{
    $_SESSION['error_msg'] =  "User with this username already exists. Please sign up with a different username";
    
	header("Location: errorPage.php");
	session_write_close();
}
else if($name=='admin'){
  $_SESSION['error_msg'] =  "User Name cannot be 'admin'. Please sign up with a different username";
    
	header("Location: errorPage.php");
	session_write_close();
}
else{

  $sql = "INSERT INTO libuser ( username, phone, email, password ) VALUES ('".$name."',".$phone.",'".$email."','".$pass."');";


  if (mysqli_query($conn, $sql)) {
    $_SESSION['name']=$name ;
     $_SESSION['phone']=$phone;
    $_SESSION['email']=$email;
    $_SESSION['userid']=$userid;
    header("Location: userdetail.php");
  }
  else
  {
    $_SESSION['error_msg'] = "There was a problem while signing up. Please try again.";
    header("Location: errorPage.php");
    die(mysqli_error());
    
  
  }
}
  mysqli_close($conn);

  ?>

