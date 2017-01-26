<?php

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - this page uses functions in utils.pjp to 
    create a table, with names of places
    images, add/remove to fave links if logged in
    or not, and finally links to locations, back,
    and home page.
  - will also show how many fave locations you have
    if you are logged in.
*/

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$action = $_GET['action'];
require('utils.php');
require('menu.php');
$cssfiles[] = 'menu.css';
$cssfiles[] = 'body.css';
outputXHTMLHdr('Pictures', $cssfiles);
outputMenu('pictures');


  echo title("Clubs and Bars");
  echo topOfForm();
  echo "Taquila Bobs";
  echo cellToCell();
  echo 'Boom Boom Room';
  echo endRowToNewRow();
  echo image("deans.jpg");
  echo cellToCell();
  echo image("bbr.jpg");
 
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("Taquila Bobs", "bars.php");
    echo cellToCell();
    echo addRemove("The Boom Boom Room", "bars.php");
  }
  echo botOfForm();
  
  echo '<br/>';
  
  echo topOfForm();
  echo '29 Park Night Club';
  echo endRowToNewRow();
  echo image("29.jpg");

  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("29 Park Night Club", "bars.php");
   }
  
  echo botOfForm();
  
  if (isset($_SESSION['isLoggedIn'])){
    echo writeShoppingCart(); 
  }
  
  echo '<p><a href=redirectlocations.php?action=Bars>Bar Locations</a></p>';
  echo returnToPictures();
  echo returnToHome();
 

outputXHTMLFtr();
?>
