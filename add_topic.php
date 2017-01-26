<?php

/* by Cezar Batto, Malek Maghnie, Prabhjit Singh */

$host="localhost"; //all variables set in order to connect to the database with the desired table
$username="pj_user"; 
$password="123";
$db_name="334project";
$tbl_name="forum_question"; 

// accctual physical connection takes place here
mysql_connect($host, $username, $password) or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select DB");


// previous data gathered
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //date variable

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')"; //acctually inserts the information into the sql table
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=forums.php>Back to main Forum</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>
