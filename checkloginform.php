<?php

/* 
by Cezar Batto, Malek Maghnie, Prabhjit Singh
- checks if invalid access to this page
- checks if login exists, if so logs them in and loads info
  and redirects to the cart page
- else redirects to logout and set invalid name
*/

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require('utils.php');
require('logindb.php');

if (count($_POST) == 0 || !isset($_POST['login'], $_POST['password'], $_POST['submit']))
  redirect('logout.php');  // if invalid access, redirect to logout

// if login exists, logs in, loads info, redirects to cart page
if (checkLogin($_POST['login'], $_POST['password'])){ 

  login($_POST['login']);
  
  $_SESSION['name'] = loadUserInfo($_POST['login']);
  
  loadFavLocations($_POST['login']);
  
  redirect('showcart.php');
}

else{  // else redirect to log out and set invalid name
  setInvalidLoginAttempt($_POST['login']);
  redirect('index.php');
}

?>
