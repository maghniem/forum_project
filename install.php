<?php
require_once('utils.php');


createFavLocationTable();
populateLoginNames();


$createtableforum = "CREATE TABLE forum_question (
id int(4) NOT NULL auto_increment,
topic varchar(255) NOT NULL default '',
detail longtext NOT NULL,
name varchar(65) NOT NULL default '',
email varchar(65) NOT NULL default '',
datetime varchar(25) NOT NULL default '',
view int(4) NOT NULL default '0',
reply int(4) NOT NULL default '0',
PRIMARY KEY (id)
);";


$createtableanswer = "CREATE TABLE forum_answer (
question_id int(4) NOT NULL default '0',
a_id int(4) NOT NULL default '0',
a_name varchar(65) NOT NULL default '',
a_email varchar(65) NOT NULL default '',
a_answer longtext NOT NULL,
a_datetime varchar(25) NOT NULL default '',
PRIMARY KEY (a_id)
);";


 $dbh = connectDB();
   
 $dbh->query($createtableforum);
 $dbh->query($createtableanswer);


 $dbh = null;



redirect('index.php');

?>
