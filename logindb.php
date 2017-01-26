<?php

/*  by Malek Maghnie and PJ
   - connects to db to check if login exists

*/
require_once('utils.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



function setLoginRedirect($where){  //sets the redirect
  $_SESSION['loginRedirect'] = $where;
}


function checkLogin($username, $password){ 
// checks if login/pw exist in db, if yes return true, else false
   $dbh = connectDB();
   
   $sql = $dbh->query('SELECT * FROM users');
   
   foreach ( $sql as $row) {
        if ($row['username'] == $username && $row['password'] == hash('ripemd160', $password)){
             $dbh = null;
            return true;
        } 
    }
    $dbh = null;    
    return false;  
}

function login($username, $redirect=FALSE){
// if login exists, unsets invalid logins, and creates login session variables
  unset(
    $_SESSION['invalidLogin'], 
    $_SESSION['invalidLoginName']
  );

  $_SESSION['isLoggedIn'] = $username;

  if (isset($_SESSION['loginRedirect'])){
    $where = $_SESSION['loginRedirect'];
    unset($_SESSION['loginRedirect']);
    redirect($where);
  }
}

function isLoggedIn(){ // returns if user is logged in or not
  return isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : FALSE;
}

// sets the invalid login attempt so it shows again when back to login form
function setInvalidLoginAttempt($user=NULL){
  unset($_SESSION['invalidLoginName'],
    $_SESSION['isLoggedIn'],
    $_SESSION['loginRedirect']);

  $_SESSION['invalidLogin'] = isset($_SESSION['invalidLogin']) 
    ? $_SESSION['invalidLogin'] + 1 : 1;

  if ($user != NULL)  $_SESSION['invalidLoginName'] = $user;
}

// returns the login name attempt
function getInvalidLoginAttemptName(){
  return $_SESSION['invalidLoginName'];
}

?>
