<?php
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

  echo title(Cinemas);
  echo topOfForm();
  echo "Cineplex Odeon";
  echo cellToCell();
  echo 'Silver City';
  echo endRowToNewRow();
  echo image("cine.jpg");
  echo cellToCell();
  echo image("silver.jpg");
    
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("Cineplex Odeon", "cinemas.php");
    echo cellToCell();
    echo addRemove('Silver City', "cinemas.php");
  }

   echo botOfForm();
  
  if (isset($_SESSION['isLoggedIn'])){
    echo writeShoppingCart(); 
  }

  echo '<p><a href=redirectlocations.php?action=Cinemas>Cinema Locations</a></p>';
  echo returnToPictures();
  echo returnToHome();

outputXHTMLFtr();
?>
