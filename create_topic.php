<?php
require('menu.php');
require('utils.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['isLoggedIn'])){
  redirect('index.php');
}

?>

<html>
<head>
<script type="text/javascript" src="code.js"></script>
<title>Create A New Topic in Windsor Mania</title>
</head>
<?php
outputMenu('forums');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$useName = $_SESSION['isLoggedIn'];
echo <<<END
<body>
<link rel="stylesheet" href="menu.css" type="text/css" />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#754754">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#754754"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>

<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>

<td><strong>Name</strong></td>
<td>:</td>
<td><input name="a_name" type="text" id="name" size="50" value =  $useName disabled/></td>
<td><input name="name" type="hidden" value= $useName></td>
</tr>
<tr>

<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>


<td>&nbsp;</td>
<td>&nbsp;</td>
<td>


<input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /> 


 </td>
</tr>
</table>
END;
?>
</td>
</form>
</tr>
</table>
<center>
<a href="forums.php>Back</a>
</center>
</body>
</html>
