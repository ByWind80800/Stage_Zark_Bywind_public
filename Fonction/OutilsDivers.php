<?php

/**
 * Transforme une date au format français jj/mm/aaaa vers le format anglais aaaa-mm-jj
 * @param $madate au format  jj/mm/aaaa
 * @return la date au format anglais aaaa-mm-jj
*/
function dateFrancaisVersAnglais($maDate){
	@list($jour,$mois,$annee) = explode('/',$maDate);
	return date('Y-m-d',mktime(0,0,0,$mois,$jour,$annee));
}
/**
 * Transforme une date au format format anglais aaaa-mm-jj vers le format français jj/mm/aaaa 
 * @param $madate au format  aaaa-mm-jj
 * @return la date au format format français jj/mm/aaaa
*/
function dateAnglaisVersFrancais($maDate){
   @list($annee,$mois,$jour)=explode('-',$maDate);
   $date="$jour"."/".$mois."/".$annee;
   return $date;
}

/**
 * Vérifie la validité du format d'une date française jj/mm/aaaa 
 * @param $date 
 * @return vrai ou faux
*/
function estDateValide($date){
	$tabDate = explode('/',$date);
	$dateOK = true;
	if (count($tabDate) != 3) {
	    $dateOK = false;
    }
    else {
		if (!estTableauEntiers($tabDate)) {
			$dateOK = false;
		}
		else {
			if (!checkdate($tabDate[1], $tabDate[0], $tabDate[2])) {
				$dateOK = false;
			}
		}
    }
	return $dateOK;
}
/**
 * Vérifie si une date est inférieure d'un an à la date actuelle
 * @param $dateTestee 
 * @return vrai ou faux
*/
function estDateDepassee($dateTestee){
	$dateActuelle=date("d/m/Y");
	@list($jour,$mois,$annee) = explode('/',$dateActuelle);
	$annee--;
	$AnPasse = $annee.$mois.$jour;
	@list($jourTeste,$moisTeste,$anneeTeste) = explode('/',$dateTestee);
	return ($anneeTeste.$moisTeste.$jourTeste < $AnPasse); 
}
/**
 * retourne le mois au format aaaamm selon le jour dans le mois
 * @param $date au format  jj/mm/aaaa
 * @return le mois au format aaaamm
*/
function getMois($date){
		@list($jour,$mois,$annee) = explode('/',$date);
		if(strlen($mois) == 1){
			$mois = "0".$mois;
		}
		return $annee.$mois;
}
/**
 * Compare un mot de passe reçu avec ceux de la base de donné
 * @param $passeReq en int
 * @return soit 0 pour aucun passe trouvé 1 si trouvé
 */
function ComparePasse($passeReq){
    $Pdo = Pdofreycenet::getPdofreycenet();
    $lesLignes=$Pdo->getListUsers();
    $bool=0;
    foreach ($lesLignes as $unUser) {
        if ($unUser['login'] == $passeReq) {
            return $bool=1;
        }
    }
    return $bool=0;
}
/**
 * Permet d'enregistrer guillemets et caractére spéciaux dans la bddd
 * @param $string en string
 * @return le string passé en param
 */
function Conversion($string){

    return addslashes(htmlspecialchars($string));
}
function TranfertImage()
{
    $prenom_nomOrigine = $_FILES['Image']['name'];
    $elementsChemin = pathinfo($prenom_nomOrigine);
    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("jpeg", "jpg", "gif","png", "PNG");
    if (!(in_array($extensionFichier, $extensionsAutorisees)))
    {
        echo " <p style= 'background-color: black; color:white;'  >Le fichier n'a pas l'extension attendue</p>";
    }
    else
    {
        // Copie dans le repertoire du script avec un prenom_nom
        // incluant l'heure a la seconde pres
        $repertoireDestination = dirname(__FILE__)."/../Vue/img/";

        $prenom_nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

        if (move_uploaded_file($_FILES['Image']["tmp_name"],$repertoireDestination.$prenom_nomDestination))
        {
            echo "<p style= 'background-color: black; color:white'  >Le fichier temporaire ".$_FILES['Image']["tmp_name"].
                " a été déplacé vers".$repertoireDestination.$prenom_nomDestination."</p>";
            return $prenom_nomDestination;
        }
        // else
        // {
        //     $erreur= "<p style= 'background-color: black; color:white' >Le fichier n'a pas été uploadé (trop gros ?) ou ".
        //         "Le déplacement du fichier temporaire a échoué".
        //         " vérifiez l'existence du répertoire ".$repertoireDestination."</p>";
        //     return $erreur;
        // }
    }
}

function TranfertMusique()
{
    $prenom_nomOrigine = $_FILES['Video']['name'];
    $elementsChemin = pathinfo($prenom_nomOrigine);
    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("mp4");
    if (!(in_array($extensionFichier, $extensionsAutorisees)))
    {
        echo " <p style= 'background-color: black; color:white;'  >Le fichier n'a pas l'extension attendue</p>";
    }
    else
    {
        // Copie dans le repertoire du script avec un prenom_nom
        // incluant l'heure a la seconde pres
        $repertoireDestination = dirname(__FILE__)."/../Vue/video/";

        $prenom_nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

        if (move_uploaded_file($_FILES['Video']["tmp_name"],$repertoireDestination.$prenom_nomDestination))
        {
            echo "<p style= 'background-color: black; color:white'  >Le fichier temporaire ".$_FILES['Video']["tmp_name"].
                " a été déplacé vers".$repertoireDestination.$prenom_nomDestination."</p>";
            return $prenom_nomDestination;
        }
        else
        {
            $erreur= "<p style= 'background-color: black; color:white' >Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination."</p>";
            return $erreur;
        }
    }
}
?>