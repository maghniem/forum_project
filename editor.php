<?php
require('utils.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['isLoggedIn'])){
  redirect('index.php');
}

if(strcmp($_SESSION['isLoggedIn'], 'maghniem') != 0){
  redirect('index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<title>TinyMCE Test</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>


<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
tinyMCE.init({
	theme : "advanced",
	mode : "textareas",
	plugins : "fullpage",
	
	
	theme_advanced_buttons1_add : "fullpage",
	theme_advanced_buttons2_add : "fullpage",
	theme_advanced_buttons3_add : "fullpage",
	theme_advanced_buttons4_add : "fullpage"
});
</script>

</head>
<body>
<link rel="stylesheet" href="menu.css" type="text/css" />
<link rel="stylesheet" href="body.css" type="text/css" />
<?
require('menu.php');
outputMenu('edit');
?>
<center>
<font size="14"><strong>Information Page Editor</strong></FONT>
<br/>
<br/>
<br/>
<font size="5">Note, changing the message deletes the old one.</FONT>
<form method="post" action="show.php">
	<p>	
		<textarea name="content" cols="125" rows="15">This is some content that will be editable with TinyMCE.</textarea>
		<input type="submit" value="Save" />
	</p>
</form>
</center>
</body>
</html>
