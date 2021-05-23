<?php
session_start();

if($_SERVER['REQUEST_METHOD']!='POST'){
        echo "<script> 
        alert('Unauthorised Access!');
        window.location.href='home.php';</script>";
        session_write_close();
}
else{    
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$filename="feedback.csv";
$data="$name,$phone,$email,$msg"."\n";
file_put_contents($filename, $data,FILE_APPEND);

echo "<script> alert('Thank you for your feedback!');
        window.location.href='home.php';
        </script>";
}
?>