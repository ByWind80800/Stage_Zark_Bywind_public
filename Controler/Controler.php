<?php
require_once(dirname(__FILE__).'/../Fonction/FonctionBD.php');
require_once(dirname(__FILE__).'/../Fonction/OutilsDivers.php');

$Pdo = Pdofreycenet::getPdofreycenet();

if(isset($_REQUEST['param']))
{
	$param = $_REQUEST['param'];
	switch ($param) 
	{
        ///////////////////// Action renvoie des pages ///////////////////////////////////
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
			$lesActus = $Pdo->getListActu();
			include(dirname(__FILE__).'/../Vue/includes/Actualités/nouvelles.php');
			break;
		}

		case 'agenda':
		{
			include(dirname(__FILE__).'/../Vue/includes/Actualités/agenda.php');
			break;
		}

		case 'retrophotos':
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

		case 'equipementMunicipaux':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/equipementMunicipaux.php');
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

		case 'Message':
		{
			include(dirname(__FILE__).'/../controler/message.php');
			break;
		}

		case 'ValidConnexion' :
            {
                //Vérification si le champs sont bien remplis
                if(!empty($_REQUEST['log'])&& !empty($_REQUEST['mot']))
                {
                    //$login = htmlspecialchars($_REQUEST['login']);
                    /*Crypte le mot de passe saisi*/
                    //$mdp = sha1($_REQUEST['mdp']);
                    /*Compare le mot de passe*/
                    $laLigne=$Pdo->Connexion($log, $mot);
                    /*Vérification si un compte est bien retourné de la bdd*/
                    /*si $laLigne == 0 c'est qu'aucun compte Membre n'est retourné*/
                    if($laLigne != 0) {
                        /*Création des variables de session contenant les informations de l'utilisateur*/
                        $_SESSION['nom'] = $laLigne['NOM'];
                        $_SESSION['login'] = $laLigne['LOGIN'];
                        $_SESSION['mdp'] = $laLigne['MDP'];
                        $_SESSION['prenom'] = $laLigne['PRENOM'];
                        $_SESSION['droit'] = $laLigne['DROIT'];
                        $_SESSION['codeUser']= $laLigne['IDUSERS'];
                        ?>
                        <script >
                            document.location.href="index.php?page=Controler&param=Message&var=connexionVrai";
                        </script>
                        <?php
                    }
                    else
                    {
                        ?>
                        <script >
                            //document.location.href="index.php?page=Controler&param=Message&var=connexionFaux";
                        </script>
                        <?php
                    }
                }
                break;
            }

            /*Action de Déconnexion*/
        case 'Deconnexion' :
            {
                /*Détruit les variables session chargées dans ValidConnexion*/
                unset($_SESSION['nom']);
                unset($_SESSION['prenom']);
                unset($_SESSION['login']);
                unset($_SESSION['mdp']);
                unset($_SESSION['codeUser']);
                unset($_SESSION['droit']);
                session_destroy();
                ?>
                <script >
                    document.location.href="index.php?page=Controler&param=Connexion";
                </script>
                <?php
                break;
            }

		default :
			include(dirname(__FILE__) . '/../Vue/includes/Accueil.php');
			break;

	}
}