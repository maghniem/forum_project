<?php

/* by Malek Maghnie
  picture index page, links to other pic pages
*/
  
require('utils.php');
require('menu.php');
$cssfiles[] = 'menu.css';
$cssfiles[] = 'body.css';
outputXHTMLHdr('Pictures', $cssfiles);
outputMenu('pictures');

echo title('Picture Page');

echo <<<gg
  <p>Welcome to the pictures section of Windsor World, here you will find pictures of places in Windsor, if you like the place, you can add the place to your Favourite Locations and be able to view information about that place whenever you log in.  Please take the time to go through and see what Windsor has to offer!</p>
  <p><a href="parks.php?action=Parks">   Parks</a></p>
  <p><a href="cinemas.php?action=Cinemas">   Cinemas</a></p>
  <p><a href="restaurants.php?action=Restaurants">   Restaurants</a></p>
  <p><a href="bars.php?action=Clubs and Bars">   Clubs and Bars</a></p>
  <p><a href="malls.php?action=Clubs and Bars">   Malls</a></p>
  <p><a href="misc.php?action=Casino Windsor">   Miscellaneous</a></p>
gg;


outputXHTMLFtr();
?>

