<?php

/* by Malek Maghnie */


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



  echo title(Parks);
  echo topOfForm();
  echo "Jackson Park";
  echo cellToCell();
  echo 'Mic Mac Park';
  echo endRowToNewRow();
  echo image("park1.jpg");
  echo cellToCell();
  echo image("park2.jpg");
  
  
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("Jackson Park", "parks.php");
    echo cellToCell();
    echo addRemove("Mic Mac Park", "parks.php");
  }
  
  echo botOfForm();
  
  
  if (isset($_SESSION['isLoggedIn'])){
    echo writeShoppingCart(); 
  }

  echo '<p><a href=redirectlocations.php?action=Parks>Park Locations</a></p>';

echo returnToPictures();
echo returnToHome();
  


outputXHTMLFtr();
?>
