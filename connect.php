<?php
require("utils.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

/*function connectDB(){ //basic connection to the SQL database
  $dsn = 'mysql:host=localhost;dbname=334project';
  $dbuser = 'pj_user';
  $dbpassword = '123';

  try {
  $dbh = new PDO($dsn, $dbuser, $dbpassword);
  } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  }
  
  return $dbh;
}*/


function createforumtable(){ //acctual function that creates the tables required

$createtableforum = "CREATE TABLE forum_question (
id int(4) NOT NULL auto_increment,
topic varchar(255) NOT NULL default '',
detail longtext NOT NULL,
`name` varchar(65) NOT NULL default '',
`email` varchar(65) NOT NULL default '',
`datetime` varchar(25) NOT NULL default '',
`view` int(4) NOT NULL default '0',
`reply` int(4) NOT NULL default '0',
PRIMARY KEY (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1";


$createtableanswer = "CREATE TABLE `forum_answer` (
`question_id` int(4) NOT NULL default '0',
`a_id` int(4) NOT NULL default '0',
`a_name` varchar(65) NOT NULL default '',
`a_email` varchar(65) NOT NULL default '',
`a_answer` longtext NOT NULL,
`a_datetime` varchar(25) NOT NULL default '',
KEY `a_id` (`a_id`)
) TYPE=MyISAM";


 $dbh = connectDB();
   
 $dbh->query($createtableforum);
 $dbh->query($createtableanswer);


 $dbh = null;
 }




?>


