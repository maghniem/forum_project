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

  echo title("Restaurants");
  echo topOfForm();
  echo "The Keg Steakhouse and Bar";
  echo cellToCell();
  echo 'Mazaar Lebanese Couisine';
  echo endRowToNewRow();
  echo image("keg.gif");
  echo cellToCell();
  echo image("maz.jpg");
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("The Keg Steakhouse and Bar", "restaurants.php");
    echo cellToCell();
    echo addRemove("Mazaar Lebanese Couisine", "restaurants.php");
  }
  echo botOfForm();
  
  
  echo topOfForm();
  echo "Jose’s Noodle Factory";
  echo cellToCell();
  echo 'Koolini’s Italian Eatery';
  echo endRowToNewRow();
  echo image("jose.jpg");
  echo cellToCell();
  echo image("kool.gif");
  
  if (isset($_SESSION['isLoggedIn'])){
    echo endRowToNewRow();
    echo addRemove("Jose’s Noodle Factory", "restaurants.php");
    echo cellToCell();
    echo addRemove("Koolini’s Italian Eatery", "restaurants.php");
  }
  echo botOfForm();
  
  
  
  if (isset($_SESSION['isLoggedIn'])){
    echo writeShoppingCart(); 
  }

echo '<p><a href=redirectlocations.php?action=Restaurants>Restaurant Locations</a></p>';
echo returnToPictures();
echo returnToHome(); 

outputXHTMLFtr();
?>
