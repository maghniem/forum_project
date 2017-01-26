<?php

require('menu.php');

include "connect.php"; //for my sql connection
//createforumtable(); //function call to populate

$host="localhost"; //all variables set in order to connect to the database with the desired table
$username="pj_user";
$password="123"; 
$db_name="334project"; 
$tbl_name="forum_question"; 

// accctual physical connection takes place here

mysql_connect("$host", "$username", "$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select DB");


//descending order
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";

$result=mysql_query($sql);

//table for the acctual posts to display
?>


<html>
<head>
<script type="text/javascript" src="code.js"></script>
<title>Welcome to the Windsor Mania Forum</title>
</head>
<?php
outputMenu('forums');
?>

<body link="#000000" vlink="#000000">

<link rel="stylesheet" href="menu.css" type="text/css" />
<link rel="stylesheet" href="body.css" type="text/css" />

<center> <img src="images/windsor_world_forum.jpg" border=1></a></center>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="6%" align="center" bgcolor="#754754"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#754754"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#754754"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#754754"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#754754"><strong>Date/Time</strong></td>
</tr>


<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php  echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
}
mysql_close(); //close connection

if(isset($_SESSION['isLoggedIn'])){
echo <<<END
  <tr>
  <td colspan="5" align="center" bgcolor="#754754"><a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
  </tr>
END;
}else{
echo <<<END
  <tr>
  <td colspan="5" align="center" bgcolor="#754754"><a href="index.php"><strong>Log in to post</strong> </a></td>
  </tr>
END;
}
?>
</table>
</body>
</html>
