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
			include (dirname(__FILE__).'/../Vue/includes/Accueil.php');
			break;
		}

		case 'Connexion':
		{
			include(dirname(__FILE__).'/../Vue/includes/connexion.php');
			break;
		}

		case 'nouvelles':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/nouvelles.php');
			break;
		}

		case 'nouvelles':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/agenda.php');
			break;
		}

		case 'nouvelles':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/retrophotos.php');
			break;
		}

		case 'Mairie':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/Mairie.php');
			break;
		}

		case 'ConseilMunicipal':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/ConseilMunicipal.php');
			break;
		}

		case 'travaux':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/travaux.php');
			break;
		}

		case 'EspaceNum':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/EspaceNum.php');
			break;
		}

		case 'RamassOm':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/RamassOm.php');
			break;
		}

		case 'Eau':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/Eau.php');
			break;
		}

		case 'SalleCommunale':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/SalleCommunale.php');
			break;
		}

		case 'Societe':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/Societe.php');
			break;
		}

		case 'comiteFete':
		{
			include(dirname(__FILE__).'/../Vue/includes/Association/comiteFete.php');
			break;
		}

		case 'Chasse':
		{
			include(dirname(__FILE__).'/../Vue/includes/Association/Chasse.php');
			break;
		}

		case 'Petanque':
		{
			include(dirname(__FILE__).'/../Vue/includes/Association/Petanque.php');
			break;
		}

		case 'histoire':
		{
			include(dirname(__FILE__).'/../Vue/includes/Decouverte/histoire.php');
			break;
		}

		case 'patrimoine':
		{
			include(dirname(__FILE__).'/../Vue/includes/Decouverte/patrimoine.php');
			break;
		}

		case 'Parcours':
		{
			include(dirname(__FILE__).'/../Vue/includes/Decouverte/Parcours.php');
			break;
		}


		default :
			include(dirname(__FILE__) . '/../Vue/includes/Accueil.php');
			break;

	}
}