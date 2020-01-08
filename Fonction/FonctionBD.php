<?php
	class Pdofreycenet
	{   		
	      	private static $serveur='mysql:host=localhost';
	      	private static $bdd='dbname=freycenet';   		
	      	private static $user='root' ;    		
	      	private static $mdp='' ;	
			private static $monPdo;
			private static $monPdofreycenet=null;

			
	/*	                    
	 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
	 * pour toutes les méthodes de la classe
	 */				
		private function __construct(){
	    	Pdofreycenet::$monPdo = new PDO(Pdofreycenet::$serveur.';'.Pdofreycenet::$bdd, Pdofreycenet::$user, Pdofreycenet::$mdp); 
			Pdofreycenet::$monPdo->query("SET names 'utf8'");
		}

		public function _destruct()
		{
			Pdofreycenet::$monPdo = null;
		}

		//**************Fonction Get*************//
		public static function getPdofreycenet()
		{
			if(Pdofreycenet::$monPdofreycenet==null)
			{
				Pdofreycenet::$monPdofreycenet= new Pdofreycenet();
			}
			return Pdofreycenet::$monPdofreycenet;  
		}

		public function getListActu()
		{
			$req = "SELECT IDACTU,TITREACTU, TEXTEACTU, DATEACTU
					FROM ACTUALITE
					ORDER BY DATEACTU DESC";
			// echo $req;
			$res = Pdofreycenet::$monPdo->query($req);
			$lesActus = $res->fetchAll();
			$nbLignes = count($lesActus);
			// for ($i=0; $i<$nbLignes; $i++)
			// {
			// 	$date = $lesLignes[$i]['dateActu'];
			// 	$lesLignes[$i]['dateActu'] = dateAnglaisVersFrancais($date);
			// }
			return $lesActus;
		}


		public function getListElus()
		{
			$req = "SELECT *
					FROM elucm
					ORDER BY NOMELU";
					//echo $req
			$var= Pdofreycenet::$monPdo->query($req);
			$lesElus = $var->fetchAll();
			return $lesElus;
		}

		public function getListSocietes()
		{
			$req = "SELECT *
					FROM entreprises";
			// echo $req;
			$res = Pdofreycenet::$monPdo->query($req);
			$lesSocietes = $res->fetchAll();
			return $lesSocietes;
		}


		public function getListImage()
		{
	        $req ="select * from image ";
	        //echo $req;
	        $var= Pdofreycenet::$monPdo->query($req);
	        $lesLignes = $var->fetchAll();
	        $nbLignes = count($lesLignes);
	        return $lesLignes;
	    }

		public function getListUsers()
		{
	        $req ="select * from  users ";
	        //echo $req;
	        $var= Pdofreycenet::$monPdo->query($req);
	        $lesLignes = $var->fetchAll();
	        $nbLignes = count($lesLignes);
	        return $lesLignes;
	    }

	    public function getListEvent()
		{
			$req = "SELECT * FROM evenement";
			// echo $req;
			$res = Pdofreycenet::$monPdo->query($req);
			$lesEvents = $res->fetchAll();
			return $lesEvents;
		}

		public function getListEventPetanque()
		{
			$req = "SELECT * FROM evenement 
INNER join TYPE_EVENEMENT on TYPE_EVENEMENT.idTypeEvent = evenement.idTypeEvent
WHERE evenement.idTypeEvent = 1";
		}

		public function getListPtitJournal()
		{
			$req = "SELECT * FROM petitjournal";
			$res = Pdofreycenet::$monPdo->query($req);
			$lesJournaux = $res->fetchAll();
			return $lesJournaux;
		}

	    //***************FONCTION INSERT************//	
	    public function insertActu($titreActu,$texteActu)
    	{
        	$req = "INSERT INTO actualite (IDACTU, IDTYPEMEDIA, TITREACTU, TEXTEACTU, DATEACTU) VALUES(null,3,'$titreActu','$texteActu',now())";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}
    	public function insertImage($idTypeMedia,$cheminIMG)
	    {
	        $req = "INSERT INTO image (IDIMG, IDTYPEMEDIA, CHEMINIMG) VALUES(null,1,'$cheminIMG')";
	        //echo $req;
	        Pdofreycenet::$monPdo->exec($req);
	    }
	    public function insertSociete($nomentreprise,$nomgerant,$corpsmetier,$ntelephone)
    	{
        	$req = "INSERT INTO entreprises (IDENTREPRISES, NOMENTREPRISE, NOMGERANT, CORPSMETIER, TELEPHONE) VALUES(null,'$nomentreprise','$nomgerant','$corpsmetier','$ntelephone')";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

	    public function insertElu($nom, $prenom, $fonction)
	    {
	    	$req = "INSERT INTO elucm VALUES (null, '$nom', '$prenom', '$fonction', 'photo')";
	    	//echo $req;
	    	Pdofreycenet::$monPdo->exec($req);
	    }

	    public function insertEvent($libelle,$descriptif)
    	{
        	$req = "INSERT INTO evenement (IDEVENT, LIBELLEEVENT, DESCRIPTIF) VALUES(null,'$libelle','$descriptif')";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

    	public function insertJournal($cheminJournal)
    	{
    		$req="INSERT INTO petitjournal
    		VALUES (null, $cheminJournal)";
    		//echo $req;
    		Pdofreycenet::$monPdo->exec($req);
    	}

    	//***************FONCTION UPDATE***************//
    	public function modifActu($titreActu,$texteActu,$id)
    	{
        	$req = "UPDATE actualite set TITREACTU ='$titreActu' ,TEXTEACTU ='$texteActu' where IDACTU=$id";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

    	public function modifSociete($nomentreprise,$nomgerant,$corpsmetier,$ntelephone,$id)
    	{
        	$req = "UPDATE entreprises set NOMENTREPRISE ='$nomentreprise' ,NOMGERANT ='$nomgerant' ,CORPSMETIER ='$corpsmetier' ,TELEPHONE ='$ntelephone' where IDENTREPRISES=$id";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

    	public function modifEvent($libelle,$descriptif,$id)
    	{
        	$req = "UPDATE evenement set LIBELLEEVENT ='$libelle' ,DESCRIPTIF ='$descriptif' where IDEVENT=$id";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}


    	//******************FONCTION DELETE******************//
    	public function supprimerImage($id)
    	{
    		$req = "DELETE FROM IMAGE WHERE IDIMG=$id";
    		//echo $req;
    		Pdofreycenet::$monPdo->exec($req);
    	}

    	public function supprimerActu($id)
    	{
        	$req = "DELETE from actualite where IDACTU=$id";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

    	public function supprimerSociete($id)
    	{
        	$req = "DELETE from entreprises where IDENTREPRISES=$id";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

    	public function supprimerElu($id)
    	{
    		$req = "DELETE FROM elucm where IDELU = $id";
    		//echo $req;
    		Pdofreycenet::$monPdo->exec($req);
    	}

    	public function supprimerEvent($id)
    	{
        	$req = "DELETE from evenement where IDEVENT=$id";
        	//echo $req;
        	Pdofreycenet::$monPdo->exec($req);
    	}

    	public function supprimerJournal($id)
    	{
    		$req="DELETE from petitjournal where IdJournal=$id";
    		//echo $req;
    		Pdofreycenet::$monPdo->exec($req);
    	}



    	//***************FONCTION DE CONNEXION***************//
			public function connexion($login,$mdp)
	    {
	        $req = "SELECT * FROM users WHERE LOGIN='$login' AND MDP='$mdp'";
	        //echo $req;
	        $var =Pdofreycenet::$monPdo->query($req);
	        // recupére la ligne corepondant au paramétres rentrés
	        $laLigne = $var->fetch();
	        return $laLigne;
	    }


	    /***************FONCTION POUR L'INSCRIPTION***************/ #Fini
	    public function Inscription($nom,$prenom,$login,$mdp)
	    {
	        $req = "INSERT into USERS (IDUSERS, NOM, PRENOM, LOGIN, MDP, DROIT) VALUES(null,'$nom','$prenom','$login','$mdp',0/* par default le droit est défini à zero=utilisateur 1=admin*/)";
	        //echo $req;
	        Pdofreycenet::$monPdo->exec($req);
	    }
}
?>