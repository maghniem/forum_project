<?php

require('utils.php');
require('menu.php');
require('logindb.php');
$cssfiles[] = 'menu.css';
$cssfiles[] = 'body2.css';
$jsfiles[] = 'code1.js';
outputXHTMLHdr('Windsor - Home', $cssfiles, $jsfiles);
outputMenu('index');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$loginDefault = htmlspecialchars(getInvalidLoginAttemptName());


if(!isset($_SESSION['isLoggedIn'])){
  echo <<<gg
    <tr>
    <td width="1011"><div align="left"> 
     <form action="checkloginform.php" method="POST">
  <fieldset>
    <legend>Login</legend>
    <p>
      <label for="login">Login: </label>
      <input type="text" name="login" value="$loginDefault" size="10" tabindex="1" />
    </p>
    <p>
      <label for="password">Password: </label>
      <input type="password" name="password" value="" size="10" tabindex="2" />
    </p>
    <p>
      <input type="submit" name="submit" value="Login" tabindex="3" />
      <input type="reset" name="reset" value="Clear" tabindex="4" />
    </p>
  </fieldset>
</form>
   
   
    <input type="button" onclick="colourPrompt()" value="Change background colour">
    </div></td>
  </tr>
gg;
}

echo <<<gg

</table><table width="925" height="371" border="1">
  <tr>
    
    <td width="766">
    <h1> Welcome to WindsorMania!!!!!!!!</h1>
    
    <h2> Bringing the Windsor community closer EVERY DAY! </h2>


	<p> Thank you for choosing WindsorMania! Here you will find all you need about this great city, such as spectacular pictures,
    awesome landmarks and great suggestions on what to do! Please take a few minutes to register for our forum and become part of our
    community. Also, if you would like a user name and password so you can get into the secret site to view more Windsor goodies, 
    please let us know! Enjoy </p>
    </td>
  </tr>
</table>
<br />


gg;


outputXHTMLFtr();
?>
