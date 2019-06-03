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
			include(dirname(__FILE__).'/../controler/Message.php');
			break;


		

		//Action connexion déconnexion//
		case 'ValiderConnexion' :
            {
                //on vérifie tout d'abord si les champs sont bien remplis
                if(!empty($_REQUEST['login'])&&!empty($_REQUEST['mdp']))
                {
                    //$login = htmlspecialchars($_REQUEST['login']);
                    //$mdp = sha1($_REQUEST['mdp']);
                    /*encrypt le mot de passe à comparé*/
                    $laLigne=$Pdo->connexion($login, $mdp);
                    //on vérifie ensuite si un compte est bien retourné de la bdd (si $laLigne == 0 c'est qu'aucun compte Membre n'est retourné et qu'il y a forcément une erreur dans les logs)
                    if($laLigne != 0) {
                        ///////// création des variales de session contenant les informations de l'utilisateur
                        $_SESSION['nom'] = $laLigne['nom'];
                        $_SESSION['login'] = $laLigne['login'];
                        $_SESSION['mdp'] = $laLigne['mdp'];
                        $_SESSION['prenom'] = $laLigne['prenom'];
                        $_SESSION['droit'] = $laLigne['droit'];
                        $_SESSION['idUsers']= $laLigne['idUsers'];
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
                            document.location.href="index.php?page=Controler&param=Message&var=connexionFaux";
                        </script>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <script >
                        document.location.href="index.php?page=Controler&param=Message&var=connexionFauxChamps";
                    </script>
                    <?php
                }
                ?>
                <?php
                break;
            }

             case 'se-deconnecter' :
            {
                //////////////////////////////////////// detruit les variable session chargé dans valid Connexion
                unset($_SESSION['nom']);
                unset($_SESSION['prenom']);
                unset($_SESSION['login']);
                unset($_SESSION['mdp']);
                unset($_SESSION['idUsers']);
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