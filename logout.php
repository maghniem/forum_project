<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once('logindb.php');
/*
  By Malek Maghnie:
  - clears cart, unsets all login session variables 
    and redirects to home page

*/
$_SESSION['cart'] = null;

$cart = $_SESSION['cart'];

unset($_SESSION['invalidLoginName'],
    $_SESSION['isLoggedIn'],
    $_SESSION['loginRedirect']);

session_destroy();

redirect('index.php');
?>

