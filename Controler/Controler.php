<?php
require_once(dirname(__FILE__).'/../Fonction/FonctionBD.php');
require_once(dirname(__FILE__).'/../Fonction/OutilsDivers.php');

$Pdo = Pdofreycenet::getPdofreycenet();

if(isset($_REQUEST['param']))
{
	$param = $_REQUEST['param'];
	switch ($param) 
	{
        ///////////////////// INCLUDES POUR LES PAGES VISITEURS ///////////////////////////////////
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
			include(dirname(__FILE__).'/../Vue/includes/Actualites/nouvelles.php');
			break;
		}

		case 'agenda':
		{
            $lesEvents=$Pdo->getListEvent();
			include(dirname(__FILE__).'/../Vue/includes/Actualites/agenda.php');
			break;
		}

		case 'retrophotos':
		{
			$lesLignesImage=$Pdo->getListImage();
			include (dirname(__FILE__).'/../Vue/includes/Actualites/retrophotos.php');
			break;
		}

		case 'Mairie':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/Mairie.php');
			break;
		}

		case 'ConseilMunicipal':
		{
			$lesElus = $Pdo->getListElus();
			include(dirname(__FILE__).'/../Vue/includes/Commune/ConseilMunicipal.php');
			break;
		}

		case 'equipementMunicipaux':
		{
			include(dirname(__FILE__).'/../Vue/includes/Commune/equipementMunicipaux.php');
			break;
		}

		// case 'travaux':
		// {
		// 	include(dirname(__FILE__).'/../Vue/includes/Commune/travaux.php');
		// 	break;
		// }

        case 'petitjournal' :
        {
            include(dirname(__FILE__).'/../Vue/includes/Commune/petitjournal.php');
            break;
        }

		case 'EspaceNum':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/EspaceNum.php');
			break;
		}

		// case 'RamassOm':
		// {
		// 	include(dirname(__FILE__).'/../Vue/includes/Services/RamassOm.php');
		// 	break;
		// }

		// case 'Eau':
		// {
		// 	include(dirname(__FILE__).'/../Vue/includes/Services/Eau.php');
		// 	break;
		// }

		case 'SalleCommunale':
		{
			include(dirname(__FILE__).'/../Vue/includes/Services/SalleCommunale.php');
			break;
		}

		case 'Societe':
		{
			$lesSocietes=$Pdo->getListSocietes();
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

		// case 'Parcours':
		// {
		// 	include(dirname(__FILE__).'/../Vue/includes/Decouverte/Parcours.php');
		// 	break;
		// }

		case 'Message':
		{
			include(dirname(__FILE__).'/message.php');
			break;
		}

		case 'Image' : 
		{
            $lesLignesImage=$Pdo->getListImage();
			include (dirname(__FILE__).'/../Vue/includes/Actualites/retrophotos.php');
			break;
		}

		//INCLUDES POUR LES PAGES ADMIN

////////////////// PAGE ADMINISTRATEUR /////////////////

          	////// Formulaire d'ajout //////

		case 'ajoutnouvelle':
		{
			include (dirname(__FILE__).'/../Vue/includes/Admin/AjoutNouvelle.php');
			break;
		}

		case 'ajoutimage' :
		{
			include (dirname(__FILE__).'/../Vue/includes/Admin/AjoutImage.php');
			break;
		}


		case 'ajoutelu':
		{
			include (dirname(__FILE__).'/../Vue/includes/Admin/AjoutElu.php');
            break;
		}

		case 'ajoutsociete':
		{
			include (dirname(__FILE__).'/../Vue/includes/Admin/AjoutSociete.php');
			break;
		}

        case 'ajoutevent':
        {
            include (dirname(__FILE__).'/../Vue/includes/Admin/AjoutEvent.php');
            break;
        }



//////////////////// ACTION AJOUTER ////////////////////

		case 'AjoutActu':
		{
			if(empty($_POST['titre'])||empty($_POST['texteActu']))
                {
                    ?>
                    <script>
                        document.location.href="index.php?page=Controler&param=Message&var=ErreurEmpty";
                    </script>
                    <?php
                }
                else
                {
                	$Pdo->insertActu(Conversion($_POST['titre']),Conversion($_POST['texteActu']));
                    ?>
                    <script >
                        document.location.href="index.php?page=Controler&param=Message&var=AjoutActu";
                    </script>
                    <?php
                }
                break;	
		}

		case 'AjoutImage':
            {
                if(!empty($_FILES['Image']['name']))
                {
                    $var=TranfertImage();
                    $Pdo->insertImage(1, $var);
                    //$Pdo->ajoutA("");
                    ?>
                    <script >
                        document.location.href="index.php?page=Controler&param=Message&var=AjoutMedia";
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script >
                        document.location.href="index.php?page=Controler&param=Message&var=ErreurEmpty";
                    </script>
                    <?php
                }
                break;
            }

            case 'AjoutElu':
                {
                    if(empty($_POST['nom'])||empty($_POST['prenom'])||empty($_POST['fonction']))
                    {
                        ?>
                        <script>
                            document.location.href="index.php?page=Controler&param=Message&var=ErreurEmpty";
                        </script>
                        <?php
                    }
                    else
                    {
                        $Pdo->insertElu(Conversion($_POST['nom']), Conversion($_POST['prenom']), Conversion($_POST['fonction']));
                        ?>
                        <script>
                            document.location.href="index.php?page=Controler&param=Message&var=AjoutElu";
                        </script>
                        <?php
                    }
                }
                break;

            case 'AjoutSociete':
		{
			if(empty($_POST['nomentreprise'])||empty($_POST['nomgerant']))
                {
                    ?>
                    <script>
                        document.location.href="index.php?page=Controler&param=Message&var=ErreurEmpty";
                    </script>
                    <?php
                }
                else
                {
                	$Pdo->insertSociete(Conversion($_POST['nomentreprise']),Conversion($_POST['nomgerant']),Conversion($_POST['corpsmetier']));
                    ?>
                    <script>
                        document.location.href="index.php?page=Controler&param=Message&var=AjoutSociete";
                    </script>
                    <?php
                }
                break;	
		}

        case 'AjoutEvent':
        {
            if(empty($_POST['libelle'])||empty($_POST['descriptif']))
                {
                    ?>
                    <script>
                        document.location.href="index.php?page=Controler&param=Message&var=ErreurEmpty";
                    </script>
                    <?php
                }
                else
                {
                    $Pdo->insertEvent(Conversion($_POST['libelle']),Conversion($_POST['descriptif']));
                    ?>
                    <script >
                        document.location.href="index.php?page=Controler&param=Message&var=AjoutEvent";
                    </script>
                    <?php
                }
                break;  
        }


//////////////////// FORMULAIRE DE MODIFICATION ////////////////////

		case 'modifnouvelle' :
		{
			$lesActus = $Pdo->getListActu();
			include (dirname(__FILE__).'/../Vue/includes/Admin/ModifNouvelle.php');
			break;
		} 

		case 'modifsociete' :
		{
			$lesSocietes = $Pdo->getListSocietes();
			include (dirname(__FILE__).'/../Vue/includes/Admin/ModifSociete.php');
			break;
		} 

        case 'modifevent' :
        {
            $lesEvents = $Pdo->getListEvent();
            include (dirname(__FILE__).'/../Vue/includes/Admin/ModifEvent.php');
            break;
        } 



//////////////////// ACTION MODIFIER ////////////////////
		case 'ModifActu':
		{
			$Pdo->modifActu(Conversion($_POST['titre']),Conversion($_POST['texteActu']),$_POST['modifId']);
                ?>
                <script >
                    document.location.href="index.php?page=Controler&param=nouvelles";
                </script>
                <?php
			break;
		}

        case 'ModifSociete':
        {
            $Pdo->modifSociete(Conversion($_POST['nomentreprise']),Conversion($_POST['nomgerant']),Conversion($_POST['corpsmetier']),$_POST['modifId']);?>
                <script >
                    document.location.href="index.php?page=Controler&param=Societe";
                </script>
                <?php
            break;
        }

        case 'ModifEvent':
        {
            $Pdo->ModifEvent(Conversion($_POST['libelle']),Conversion($_POST['descriptif']),$_POST['modifId']);
                ?>
                <script >
                    document.location.href="index.php?page=Controler&param=agenda";
                </script>
                <?php
            break;
        }


//////////////////// ACTION SUPPRIMER ////////////////////
		case 'SupprNouvelle' :
		{
			$Pdo->supprimerActu($_REQUEST['idActu']);
                ?>
                <script >
                    document.location.href="index.php?page=Controler&param=nouvelles";
                </script>
                <?php
                break;
		}

		case 'SupprSociete' :
		{
			$Pdo->supprimerSociete($_REQUEST['idEntreprises']);
                ?>
                <script >
                    document.location.href="index.php?page=Controler&param=Societe";
                </script>
                <?php
                break;
		}

        case 'SupprElu' :
        {
            $Pdo ->supprimerElu($_REQUEST['idElu']);
            ?>
            <script>
                document.location.href="index.php?page=Controler&param=ConseilMunicipal";
            </script>
            <?php
            break;
        }

        case 'SupprEvent' :
        {
            $Pdo->supprimerEvent($_REQUEST['idEvent']);
                ?>
                <script >
                    document.location.href="index.php?page=Controler&param=agenda";
                </script>
                <?php
                break;
        }

        case'SupprImg':
        {
            $Pdo->supprimerImage($_REQUEST['idImg']);
            ?>
            <script>
                document.location.href="index.php?page=Controler&param=retrophotos";
            </script>
            <?php
            break;
        }




            //GESTION DES PAGES CONNEXION ET INSCRIPTION//

        case 'ValidConnexion' :
            {
                //on vérifie tout d'abord si les champs sont bien remplis
                if(!empty($_REQUEST['login'])&&!empty($_REQUEST['mdp']))
                {
                    $login = htmlspecialchars($_REQUEST['login']);
                    $mdp = sha1($_REQUEST['mdp']);
                    /*encrypt le mot de passe à comparé*/
                    $laLigne=$Pdo->connexion(Conversion($login),Conversion($mdp));
                    //on vérifie ensuite si un compte est bien retourné de la bdd (si $laLigne == 0 c'est qu'aucun compte Membre n'est retourné et qu'il y a forcément une erreur dans les logs)
                    if($laLigne != 0) 
                    {
                        ///////// création des variales de session contenant les informations de l'utilisateur
                        $_SESSION['nom'] = $laLigne['NOM'];
                        $_SESSION['login'] = $laLigne['LOGIN'];
                        $_SESSION['mdp'] = $laLigne['MDP'];
                        $_SESSION['prenom'] = $laLigne['PRENOM'];
                        $_SESSION['droit'] = $laLigne['DROIT'];
                        $_SESSION['idUser']= $laLigne['IDUSERS'];
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
            }


            case 'Inscription' :
            {
                // test si les champs sont remplient
                if(!empty($_REQUEST['mdp'])&&!empty($_REQUEST['login'])&&!empty($_REQUEST['prenom'])&&!empty($_REQUEST['nom']))
                {
                    // test si mdp et mdpConfirmation son egaux
                    if($_REQUEST['mdp']==$_REQUEST['mdpConfirmation'])
                    {
                        // test si le login est dans la bd si pas trouvé =0 si existant =1
                        if(ComparePasse($_REQUEST['login'])==0)
                        {
                            $mdp =sha1(Conversion($_REQUEST['mdp']));
                            $Pdo->Inscription(Conversion($_REQUEST['nom']),Conversion($_REQUEST['prenom']),Conversion($_REQUEST['login']),$mdp);
                            ?>
                            <script >
                                document.location.href="index.php?page=Controler&param=Message&var=inscriptionVrai";
                            </script>
                            <?php
                        }
                        else 
                        {
                            ?>
                            <script >
                                document.location.href="index.php?page=Controler&param=Message&var=ErreurLogin";
                            </script>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <script >
                            document.location.href="index.php?page=Controler&param=Message&var=ErreurPasse";
                        </script>
                        <?php
                    }
                }
                else 
                {
                    ?>
                    <script >
                        document.location.href="index.php?page=Controler&param=Message&var=ErreurEmpty";
                    </script>
                    <?php
                }
                ?>
                <?php
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