<?php
//header("Location: signUp.html");
session_start();

if($_SERVER['REQUEST_METHOD']!='POST'){
    echo "<script> 
    alert('Unauthorised Access!');
    window.location.href='home.php';</script>";
    session_write_close();
}

$_SESSION['page']="login.html";

$email = $_POST['email'];
$pass = $_POST['password'];

//database details
$servername = "localhost";
$username = "admin";
$password = "Library@2020";
$database = "library";

if($email=="admin@nitte.edu.in" && $pass==$password){
    

    // Create connection
    if(mysqli_connect($servername, $username, $password, $database)){
        $_SESSION['name']='admin';
        $_SESSION['email']=$email;

        session_write_close();
		echo "Authenticated";
        header("Location: admin.php");

    }
    else{
        $_SESSION['error_msg'] = "Cannot connect to database!";
		session_write_close();
		header("Location: errorPage.php");
    }


}
else{
        $_SESSION['error_msg'] = "Login Failed.";
		session_write_close();
		header("Location: errorPage.php");
}