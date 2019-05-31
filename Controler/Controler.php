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

		case 'nouvelles':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/nouvelles.php');
		}

		case 'nouvelles':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/agenda.php');
		}

		case 'nouvelles':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/retrophotos.php');
		}

		case 'Mairie':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/Mairie.php');
		}

		case 'ConseilMunicipal':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/ConseilMunicipal.php');
		}

		case 'travaux':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/travaux.php');
		}

		case 'EspaceNum':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/EspaceNum.php');
		}

		case 'RamassOm':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/RamassOm.php');
		}

		case 'Eau':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/Eau.php');
		}

		case 'SalleCommunale':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/SalleCommunale.php');
		}

		case 'Societe':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/Societe.php');
		}

		case 'comiteFete':
		{
			include(dirname(__FILE__).'/../Vue/includes/Association/comiteFete.php');
		}

		case 'Chasse':
		{
			include(dirname(__FILE__).'/../Vue/includes/Association/Chasse.php');
		}

		case 'Petanque':
		{
			include(dirname(__FILE__).'/../Vue/includes/Association/Petanque.php');
		}

		case 'histoire':
		{
			include(dirname(__FILE__).'/../Vue/includes/Decouverte/histoire.php');
		}

		case 'patrimoine':
		{
			include(dirname(__FILE__).'/../Vue/includes/Decouverte/patrimoine.php');
		}

		case 'Parcours':
		{
			include(dirname(__FILE__).'/../Vue/includes/Decouverte/Parcours.php');
		}


		default :
			include(dirname(__FILE__) . '/../Vue/includes/Accueil.php');
			break;

	}
}