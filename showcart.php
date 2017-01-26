<?php

/* by Malek Maghnie
  - shows your cart if you're logged in, your name, and your user id
  - tells you to log in if you're not logged in
*/
require('utils.php');
require('menu.php');
require('logindb.php');
$cssfiles[] = 'menu.css';
$cssfiles[] = 'body.css';
outputXHTMLHdr('Favourite Locations', $cssfiles);
outputMenu('favs');

echo title("Favourite Locations");

if (isLoggedIn()){
  echo "Welcome ".$_SESSION['name'].",<br /><br />";
  showCart();
  
  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
  echo "Logged in as ".$_SESSION['isLoggedIn'].".";
} else echo "Please <a href=index.php?>log in</a>.";

outputXHTMLFtr();

?>
