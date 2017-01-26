<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>



<?php
require('menu.php');
outputMenu('info');
if(isset($_POST['content'])){
  $myFile = "testFile.txt";
  $fh = fopen($myFile, 'w') or die("can't open file");
  $stringData = $_POST['content'];
  fwrite($fh, $stringData);
  fclose($fh);
}

  $myFile = "testFile.txt";
  $fh = fopen($myFile, 'r');
  $theData = fread($fh, filesize($myFile));
  fclose($fh);
    
  echo $theData;
?>

<link rel="stylesheet" href="menu.css" type="text/css" />
<link rel="stylesheet" href="body.css" type="text/css" />
</body>
</html>
