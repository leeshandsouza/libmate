<?php
session_start();

unset($_SESSION['name']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['userid']);
header("Location: home.php");

?>