<?php 
require("utils.php") ;
require("menu.php") ;

if (isset($_POST["Username"])) $Username = $_POST["Username"];
if (isset($_POST["Fname"])) $Fname = $_POST["Fname"];
if (isset($_POST["Lname"])) $Lname = $_POST["Lname"];
if (isset($_POST["Password"])) $Password = $_POST["Password"];
if (isset($_POST["ConfirmPW"])) $ConfirmPW = $_POST["ConfirmPW"];



$cssFile[] = "menu.css";
$cssFile[] = 'body.css';

outputXHTMLHdr("Personal INFO", $cssFile) ;
outputMenu('registration') ;

echo title("Registration");


echo <<<END
<link rel="stylesheet" type="text/css" href="regis.css" /> 
END;

if (!isset($_POST['submit'])) {//if page is not submitted to istelf echo the form 

echo<<<END
Welcome to the Windsor World registration page, please take a moment to register, you will be granted access to features that are not available to guests. <br/><br/>

<form method="post" action="#" >
<br />
Desired login(5-12 characters): <input type="text" size="12" maxlength="12" name="Username"><br /><br />
First Name: <input type="text" size="12" maxlength="12" name="Fname"><br /><br />
Last Name:  <input type="text" size="12" maxlength="12" name="Lname"><br /><br />
Password(3-12 characters):<input type="password" size="12" maxlength="12" name="Password"><br /><br />
ConfirmPW(3-12 characters):<input type="password" size="12" maxlength="12" name="ConfirmPW"><br /><br />
<input type="submit" value="submit" name="submit">
</form>
END;


} else {
  if (strlen($Username) < 5){
      echo 'Please enter a login ID of atleast 5 characters';
      echo '<p><a href=formdata.php>Back to Registration</a></p>';
  }
  else if (strlen($Password) < 3){
      echo 'Please enter a password of atleast 3 characters';
      echo '<p><a href=formdata.php>Back to Registration</a></p>';
  }
  else if (strlen($ConfirmPW) < 3){
      echo 'Please enter a password of atleast 3 characters';
      echo '<p><a href=formdata.php>Back to Registration</a></p>';
  }
  else if (strlen($Fname) < 1){
      echo 'Please enter a first name of atleast 1 character';
      echo '<p><a href=formdata.php>Back to Registration</a></p>';
  }
  else if (strlen($Lname) < 1){
      echo 'Please enter a last name of atleast 1 character';
      echo '<p><a href=formdata.php>Back to Registration</a></p>';
  }
  else if (checkIfExists($Username) == true && strcmp($Password, $ConfirmPW) == 0){
  
      createLoginID($Username, hash('ripemd160',$Password), $Fname, $Lname);
      echo "Hello, $Fname $Lname, you have successfully registered into the Windsor Mania site !!:D <br /><br />";
      echo 'Your login ID is '.$Username.'.<br />';
      echo 'You are now able to access site features such as adding Favourite locations, viewing your favourite locations, and also accessing the site forum.  Please take a look around and enjoy your stay at Windsor Mania.<br/>';
      echo '<p><a href=forums.php>Forums</a></p><br/>';
      echo '<p><a href=showcart.php>Favourite Locations</a></p>';
   }
   
   else{ 
   
      if (checkIfExists($Username) == false){
        echo '<br />The login name '.$Username.' already exists, please try again.';
      }else if (strcmp($Password, $ConfirmPW) != 0){
        echo 'You have entered two different passwords.';
      }
       echo '<p><a href=formdata.php>Back to Registration</a></p>';
  }
}
outputXHTMLFtr();

?>
