<?php
require_once(dirname(__FILE__).'/../Fonction/FonctionBD.php');
require_once(dirname(__FILE__).'/../Fonction/OutilsDivers.php');

$Pdo = Pdofreycenet::getPdofreycenet();

if(isset($_REQUEST['param']))
{
	$param = $_REQUEST['param'];
	switch ($param) 
	{
        ////////////////////////////////////////////////////////////////////////////////////// Action renvoie des pages
		case 'Accueil' : 
		{
			include (dirname(__FILE__).'/../Vue/includes/accueil.php');
			break;
		}

		case 'Connexion':
		{
			include(dirname(__FILE__).'/../Vue/includes/connexion.php');
		}

		default :
			include(dirname(__FILE__) . '/../Vue/includes/connexion.php');
			break;

	}
}