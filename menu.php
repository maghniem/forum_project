<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
function outputMenu($which)
{
$cssClass = '';
$current = '';
if(strcmp($which, 'forums') == 0){
	$cssClass = 'menu1';
	$current = 'Forum';
	$menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(	
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
  $menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');	
}else if(strcmp($which, 'index') == 0){
  $current = 'Home';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');

	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
						
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
		$menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'registration') == 0){
  $current = 'Register';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
						
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
	$menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'pictures') == 0){
  $current = 'Pictures';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
	$menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'favs') == 0){
  $current = 'Favourite Locations';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
  $menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
	$menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'wiki') == 0){
  $current = 'History Wiki';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
	$menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'info') == 0){
  $current = 'Information';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
  $menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'edit') == 0){
  $current = 'Edit Info';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
  $menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'upload') == 0){
  $current = 'Upload';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');
	
	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
  $menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}else if(strcmp($which, 'locs') == 0){
  $current = 'Locations';
  $menuItems[] = array(
						'text' => 'Home',
						'link' => 'index.php');
	$menuItems[] = array(
						'text' => 'Pictures',
						'link' => 'picturepage.php');
	$menuItems[] = array(
						'text' => 'Locations',
						'link' => 'locations.php');
	$menuItems[] = array(
						'text' => 'Favourite Locations',
						'link' => 'showcart.php');
	$menuItems[] = array(
						'text' => 'Forum',
						'link' => 'forums.php');
	$menuItems[] = array(
						'text' => 'History Wiki',
						'link' => 'wiki.php');
	$menuItems[] = array(
						'text' => 'Register',
						'link' => 'formdata.php');

	$menuItems[] = array(
						'text' => 'Information',
						'link' => 'show.php');
						
	$menuItems[] = array(
						'text' => 'Upload',
						'link' => 'upload.php');
		$menuItems[] = array(
						'text' => 'Logout',
						'link' => 'logout.php');
}

if(strcmp($_SESSION['isLoggedIn'], 'maghniem') == 0){
  $menuItems[] = array(
						'text' => 'Edit Info',
						'link' => 'editor.php');
}
echo "<div id=\"menu\"><ul class=\"{$cssClass}\">";
  foreach ($menuItems as $menu){
    if(strcmp($current, $menu['text']) == 0){
        echo "<li><a class = \"sel\" href=\"{$menu['link']}\">{$menu['text']}</a></li>";
    }else{
        echo "<li><a href=\"{$menu['link']}\">{$menu['text']}</a></li>";
    }
   }
  echo "</ul></div>";

}


?>
