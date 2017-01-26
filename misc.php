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

  

  echo title("Miscellaneous Places of Interest");
  echo topOfForm();
  echo "University of Windsor";
  echo cellToCell();
  echo 'Caesars Windsor';
  echo endRowToNewRow();
  echo image("uofw.jpg");
  echo cellToCell();
  echo image("casino1.jpg");
  
  
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("University of Windsor", "misc.php");
    echo cellToCell();
    echo addRemove("Caesars Windsor", "misc.php");
  }
  echo botOfForm();
  
  echo '<br/>';
  
  echo topOfForm();
  echo 'WFCU Centre';
  echo endRowToNewRow();
  echo image("wfcu.jpg");
  
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("WFCU Centre", "misc.php");
   }
  
  echo botOfForm();
  
  if (isset($_SESSION['isLoggedIn'])){
    echo writeShoppingCart(); 
  }
 
 echo '<p><a href=redirectlocations.php?action=Miscellaneous>Miscellaneous Locations</a></p>';
echo returnToPictures();
echo returnToHome();


outputXHTMLFtr();
?>
