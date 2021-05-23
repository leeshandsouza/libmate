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
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//check if user with same username exists in db
$sql = "SELECT password, username , phone ,userid FROM libuser WHERE email = '".$email."';";

$result = mysqli_query($conn,$sql);
if($result)
{
    $row = mysqli_fetch_row($result);
    
	if($row!=null && strcasecmp($row[0], $pass) == 0)
	{
		$_SESSION['name'] = $row[1];
		$_SESSION['phone'] = $row[2];
		$_SESSION['userid'] = $row[3];
		$_SESSION['email'] = $email;

        session_write_close();
        
		echo "Authenticated";
		header("Location: userdetail.php");
	}
	else if($row == null)
	{
        $_SESSION['error_msg'] = "Account does not exist.";
		session_write_close();
		header("Location: errorPage.php");
    }
    
    else{
        echo "<script> alert('Wrong Password. Try Again!');
        window.location.href='login.html';
        </script>";
        session_write_close();
        

    }
}
else
	{
        $_SESSION['error_msg'] = "Login Failed.";
		session_write_close();
		header("Location: errorPage.php");
	}
?>