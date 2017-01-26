<?php

/*  By Cezar Batto, Malek Maghnie, Prabhjit Singh
      - Matt wrote most of the code for this, I implemented
        the database function calls.
      - this page adds or deletes from the cart, and with
        that, also adds or deletes from 'favlocations' 
        table in the sites database.

*/

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require('logindb.php');
$cart = $_SESSION['cart'];
$action = $_GET['action'];
$page = $_GET['page'];


switch($action){
case 'add':
	if ($cart) {
		$cart .= ','.$_GET['id'];
		addFavLocation($_SESSION['isLoggedIn'], $_GET['id']);
	} else {
		$cart = $_GET['id'];
		addFavLocation($_SESSION['isLoggedIn'], $_GET['id']);
	}
	$_SESSION['cart'] = $cart;
	break;
	
	
	case 'delete':
	removeFavLocation($_SESSION['isLoggedIn'], $_GET['id']);
	$cart = $_SESSION['cart'];
$action = $_GET['action'];
switch ($action) {
	case 'add':
		if ($cart) {
			$cart .= ','.$_GET['id'];
		} else {
			$cart = $_GET['id'];
		}
		break;
	case 'delete':
	  removeFavLocation($_SESSION['isLoggedIn'], $_GET['id']);
		if ($cart) {
			$items = explode(',',$cart);
			$newcart = '';
			foreach ($items as $item) {
				if ($_GET['id'] != $item) {
					if ($newcart != '') {
						$newcart .= ','.$item;
					} else {
						$newcart = $item;
					}
				}
			}
			$cart = $newcart;
		}
		break;
}
$_SESSION['cart'] = $cart;
	
	
	}

header('Location: '.$page);
?>
