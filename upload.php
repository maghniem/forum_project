<?php

/* by Prabhjit Singh */

require("utils.php");
require("menu.php");


 define ("MAX_SIZE","100"); 
 
  function getExtension($str) {         
  $i = strrpos($str,".");         
  if (!$i) { return ""; }         
  $l = strlen($str) - $i;         
  $ext = substr($str,$i+1,$l);         
  return $ext; }
  
  $cssFile[] = "menu.css" ;
  $cssFile[] = "body.css" ;
  outputXHTMLHdr("File Upload", $cssFile) ;
  outputMenu('upload');
  
  echo title('Uploads Page');
  
  echo 'Welcome to the upload page, this is where you are able upload a photo, and the site keeperes will review it as soon as possible to see if it is worthy of making our gallery.  So post away!<br/>';
  
    $errors=0;
  
   if(isset($_POST['Submit']))  {
   $image=$_FILES['image']['name'];
   
   if ($image)  	{
   $filename = stripslashes($_FILES['image']['name']);
   
   $extension = getExtension($filename); 		
   $extension = strtolower($extension);
   
    if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))  {
	echo '<h1>Unknown extension!</h1>'; 			
	$errors=1;
	}
	else
	{
	
	$image_name=time().'.'.$extension;
	
	$newname="images/".$image_name;
	
	$copied = move_uploaded_file($_FILES['image']['tmp_name'], $newname);
	if (!$copied) {	
	echo '<h1>Copy unsuccessfull!</h1>';	
	$errors=1;
	}}}}
	
	if(isset($_POST['Submit']) && !$errors)  { 	
	echo "<h1>File Uploaded Successfully!!</h1>"; } 
	
	 outputXHTMLFtr();
	?>
	
	<form name="newad" method="post" enctype="multipart/form-data"  action=""> 
	<table> 	
	<tr><td><input type="file" name="image"></td></tr> 	
	<tr><td><input name="Submit" type="submit" value="Upload image"></td></tr> 
	</table>	 
	</form>  
	
