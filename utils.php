<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
function outputXHTMLHdr($title, $cssFiles=array(), $jsFiles=array())
{
echo <<<ZZEOF
	<?xml version="1.0" encoding="UTF-8"?>
	<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<script type="text/javascript" src="code.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>{$title}</title>
ZZEOF;


foreach ($cssFiles as $cssFile)
	echo "<link rel=\"stylesheet\" href=\"{$cssFile}\" type=\"text/css\" />\n";
	
foreach ($jsFiles as $jsFile)	
	echo '<script src="'.$jsFile.'" type="text/javascript"></script>';
	
echo "</head><body>";

}

function outputXHTMLFtr()
{
  echo '</body></html>';
}

function writeShoppingCart() {
	$cart = $_SESSION['cart'];
	if (!$cart) {
		return '<p>You have no locations your favourites</p>';
	} else {
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<p>You have <a href="showcart.php">'.count($items).' location'.$s.' in your favourites</a></p>';
	}
}

function isSelected($id){
	$cart = $_SESSION['cart'];
	$items = explode(',',$cart);
	foreach ($items as $item) {
		if(strcmp($item, $id) == 0){
			return true;
		}
	}
	return false;
}

/* By Cezar Batto, Malek Maghnie, Prabhjit Singh
    - This function takes whats currently in the cart
      and displays whats in the cart as links to corresponding
      pages in the locations.xml page.
*/

function showCart() {
	$cart = $_SESSION['cart'];
	
	if (!$cart){
	  echo "You have no favourite locations.";
	}
	else {
		$items = explode(',',$cart);
		$contents = array();
		echo "You have the following locations:<br/>";
		//$s = (count($items) > 1) ? ',':'';
		foreach ($items as $item) {
			if ($item == 'Jackson Park' || $item == 'Mic Mac Park'){
			  echo '<a href=redirectlocations.php?action=Parks>'.$item.'</a>';
			  echo "<br/>";
			}else if ($item == 'Cineplex Odeon' || $item == 'Silver City'){
			  echo '<a href=redirectlocations.php?action=Cinemas>'.$item.'</a>';
			  echo "<br/>";
			}else if ($item == 'The Keg Steakhouse and Bar' || $item == 'Mazaar Lebanese Couisine'
			  || $item == 'Koolini’s Italian Eatery' || $item == 'Jose’s Noodle Factory'){
			  echo '<a href=redirectlocations.php?action=Restaurants>'.$item.'</a>';
			  echo "<br/>";
			}else if ($item == '29 Park Night Club' || $item == 'The Boom Boom Room' || 
			  $item == "Taquila Bobs"){
			  echo "<a href=redirectlocations.php?action=Bars>".$item."</a>";
			  echo "<br/>";
			}else if ($item == 'Devonshire Mall' || $item == 'Tecumseh Mall'){
			  echo '<a href=redirectlocations.php?action=Malls>'.$item.'</a>';
			  echo "<br/>";
			}else if ($item == 'Caesars Windsor' || $item == 'WFCU Centre' || 
			  $item == "University of Windsor"){
			  echo "<a href=redirectlocations.php?action=Miscellaneous>".$item."</a>";
			  echo "<br/>";
			}
		}	
	}
}

/* By Cezar Batto, Malek Maghnie, Prabhjit Singh 
    - the next few functions are all used in my 
      picture pages to display the images and 
      links, and so forth.
*/

function title($place){

  return '<h1>'.$place.'</h1>';

}

function topOfForm(){ //By Cezar Batto, Malek Maghnie, Prabhjit Singh
  return '<table border="1">
			        <tr>
				        <td>';
}

function image($picName){ //By Cezar Batto, Malek Maghnie, Prabhjit Singh
    return '<img src="images/'.$picName.'" />';
}

function endRowToNewRow(){ //By Cezar Batto, Malek Maghnie, Prabhjit Singh
    return '</td></tr><tr><td>';
}

function addRemove($name, $place){//By Cezar Batto, Malek Maghnie, Prabhjit Singh
    
    if(!isSelected($name)){
				return '<a href="cart.php?action=add&id='.$name.'&page='.$place.'">Add to favourites</a>';

		}else{
				return '<a href="cart.php?action=delete&id='.$name.'&page='.$place.'">Remove from favourites</a>'; 

		} 


}

function cellToCell(){  //By Cezar Batto, Malek Maghnie, Prabhjit Singh
  return 	'</td><td>';

}

function botOfForm(){ //By Cezar Batto, Malek Maghnie, Prabhjit Singh
    return '
				</td>
			</tr>
		</table>';

}

function returnToPictures(){ //By Cezar Batto, Malek Maghnie, Prabhjit Singh
    return '<p><a href=picturepage.php?>Back</a></p>';

}

function returnToHome(){ //By Cezar Batto, Malek Maghnie, Prabhjit Singh
    return '<p><a href=index.php>Home</a></p>';

}

function redirect($where){ //By  Malek Maghnie,Cezar Batto, Prabhjit Singh
  header('Location: '.$where);
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - establishes connection to 334project on
    wwwdb @ localhost, returns the link
*/
function connectDB(){
  $dsn = 'mysql:host=localhost;dbname=334project';
  $dbuser = 'pj_user';
  $dbpassword = '123';

  try {
  $dbh = new PDO($dsn, $dbuser, $dbpassword);
  } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  }
  
  return $dbh;
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - creates table users 
  - populates that table with 3 records
  - hashes passwords
  - used in install.php
*/

function populateLoginNames(){
//$sql1 = mysql_real_escape_string($sql1);
//$sql2 = mysql_real_escape_string($sql2);
$sql1 = "CREATE TABLE users (username VARCHAR(20) NOT NULL PRIMARY KEY, password VARCHAR(100), fname CHAR(20), lname CHAR(20))";

$sql2 = "INSERT INTO users (username, password, fname, lname) VALUES('maghniem', '".hash('ripemd160', 'abc')."', 'Maghnie', 'Malek');
         INSERT INTO users (username, password, fname, lname) VALUES('cbatto', '".hash('ripemd160', '123')."', 'Batto', 'Cezar');
         INSERT INTO users (username, password, fname, lname) VALUES('pjsingh', '".hash('ripemd160', 'xyz')."', 'Singh', 'Prabhjit')";

 $dbh = connectDB();
   
 $dbh->query($sql1);
 $dbh->query($sql2);
 $dbh = null;
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - creates new username record in 'users' table
*/
function createLoginID($user, $pw, $fname, $lname){
    ////$sql = mysql_real_escape_string($sql);
    $sql = "INSERT INTO users(username, password, fname, lname) VALUES('".$user."', '".$pw."', '".$fname."', '".$lname."')";
    
    $dbh = connectDB();
    $dbh->query($sql);
    $dbh = null;

}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - loads login id's information to display in Favourite Locations
*/
function loadUserInfo($username){
   $dbh = connectDB();
   //$sql = mysql_real_escape_string($sql);
   $sql = "SELECT * FROM users WHERE username = '".$username."'";
   
   
   foreach ($dbh->query($sql) as $row) {
       $dbh = null;
       return $row['fname']." ".$row['lname'];
   }
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - creates the 'favlocations' table, used in install.php
*/
function createFavLocationTable(){
    //$sql = mysql_real_escape_string($sql);
    $sql = "CREATE TABLE favlocations (id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(60) NOT NULL, favlocations VARCHAR(60) NOT NULL, FOREIGN KEY(username) REFERENCES users)";

    $dbh = connectDB();
    $dbh->query($sql);
    $dbh = null;
    
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - adds new fave location to 'favlocations' table
*/
function addFavLocation($username, $place){
    //$sql = mysql_real_escape_string($sql);
    $sql = "INSERT INTO favlocations (username, favlocations) VALUES('".$username."', '".$place."')";

    $dbh = connectDB();
    $dbh->query($sql);
    $dbh = null;
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - removes fave location to 'favlocations' table
*/
function removeFavLocation($username, $place){
    ////$sql = mysql_real_escape_string($sql);
    $sql = "delete FROM favlocations WHERE username = '".$username."' AND favlocations = '".$place."'";
    
    $dbh = connectDB();
    $dbh->query($sql);
    $dbh = null;
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - loads all fav locations from 'favlocations' table
    for logged in user
*/
function loadFavLocations($username){
   //$sql = mysql_real_escape_string($sql);
   $sql = "SELECT * FROM favlocations WHERE username = '".$username."'";
   
   $dbh = connectDB();
   
   foreach ($dbh->query($sql) as $row) {
      if ($row['username'] == $username){
          if ($cart) {
		        $cart .= ','.$row['favlocations'];
		      } else {
		        $cart = $row['favlocations'];
		      }
	        $_SESSION['cart'] = $cart; 
      } 
   }
   
   $dbh = null;
}

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh
  - checks if the the desired login is in use or not,
  - returns false if it exists, true if available
*/
function checkIfExists($username){
   
   //$sql = mysql_real_escape_string($sql);
   $sql = "SELECT * FROM users WHERE username = '".$username."'";
   
   $dbh = connectDB();
   
   foreach ($dbh->query($sql) as $row) {
      if ($row['username'] == $username){
          return false;
      } 
   }
      
   $dbh = null;
   return true; 
}

?>
