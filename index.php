<?php
	include 'Vue/includes/header.php';
	include 'Vue/includes/menu.php';

	if(isset($_REQUEST['page']))
	{
		$page=$_REQUEST['page'];
		include(dirname(__FILE__).'/Controler/'.$page.'.php');
	}
	else
	{
		include(dirname(__FILE__) . '/Vue/includes/Accueil.php');
	}
	include 'Vue/includes/pied.php';
?>

