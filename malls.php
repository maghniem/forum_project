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

  echo title(Malls);
  echo topOfForm();
  echo 'Devonshire Mall';
  echo cellToCell();
  echo 'Tecumseh Mall';
  echo endRowToNewRow();
  echo image("mall1.jpg");
  echo cellToCell();
  echo image("mall2.jpg");
  
  
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("Devonshire Mall", "malls.php");
    echo cellToCell();
    echo addRemove("Tecumseh Mall", "malls.php");
  }
  
  echo botOfForm();
 
  
  if (isset($_SESSION['isLoggedIn'])){
    echo writeShoppingCart(); 
  }

echo '<p><a href=redirectlocations.php?action=Malls>Mall Locations</a></p>';
echo returnToPictures();
echo returnToHome();

outputXHTMLFtr();
?>
