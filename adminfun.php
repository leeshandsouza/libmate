<?php
//header("Location: signUp.html");
session_start();

if(!isset($_SESSION['name'])){
    echo "<script> 
              alert('Unauthorised Access!');
              window.location.href='home.php';</script>";
              session_write_close();
  }else if($_SESSION['name']!='admin'){
    echo "<script> 
              alert('Unauthorised Access!');
              window.location.href='home.php';</script>";
              session_write_close();
  }
  
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$phone = "";
$userid= "";
 
//database details
$servername = "localhost";
$username = "admin";
$password = "Library@2020";
$database = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM book";
$result = mysqli_query($conn,$sql);

if(isset($_POST['addbtn'])){

    $bid=$_POST['bid'];
    $bname=$_POST['bname'];
    $author=$_POST['author'];
    $year=intval($_POST['year']);
    $qty=$_POST['qadd'];

    $sql="INSERT INTO book VALUES($bid,'$bname','$author',$year,$qty);";
    if (!mysqli_query($conn, $sql)) 
        {
            echo "<script> 
            alert('Error! Cannot Add New Book');
            window.location.href='admin.php';</script>";
            session_write_close();
                    
        }
    else{
            echo "<script>
            alert('New Book Added Successfully!');
            window.location.href='admin.php';</script>";
            session_write_close();

        }
}
else if(isset($_POST['removebtn'])){
    $bid=$_POST['removeselect'];

    $sql="DELETE FROM BOOK WHERE bookid=$bid;";
    if (!mysqli_query($conn, $sql)){
        echo "<script> 
            alert('Error! Cannot Remove The Book');
            window.location.href='admin.php';</script>";
            session_write_close();
    }
    else{
        echo "<script>
        alert('Book Removed Successfully!');
        window.location.href='admin.php';</script>";
        session_write_close();

    }

}
else if(isset($_POST['updatebtn'])){

    $res=$_POST['updateselect'];
    $res=explode("|",$res);
    $bid=$res[0];
    $qty=$res[1];

    $addq=$_POST['addq'];
    $remq=$_POST['removeq'];

    if($addq==null)
        $addq=0;
    if($remq==null)
        $remq=0;

    $totq=$addq-$remq;
    $sql="select quantity from book where bookid=$bid";
    $res=mysqli_query($conn, $sql);
    if(mysqli_fetch_row($res)>0){
        echo"<script>alert(\"cannot update\");
        window.location.href=\"admin.php\";</script>";
    }else{
    $sql="UPDATE book SET quantity=quantity+$totq WHERE bookid=$bid ";

    if (!mysqli_query($conn, $sql)){
        echo "<script> 
            alert('Error! Cannot Update The Book');
            window.location.href='admin.php';</script>";
            session_write_close();
    }
    else{
        echo "<script>
        alert('Book Updated Successfully!');
        window.location.href='admin.php';</script>";
        session_write_close();

    }
}
}