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
			$req = "SELECT TITREACTU, TEXTEACTU, DATEACTU
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

		public function getListUsers()
		{
	        $req ="select * from  users ";
	        echo $req;
	        $var= Pdofreycenet::$monPdo->query($req);
	        $lesLignes = $var->fetchAll();
	        $nbLignes = count($lesLignes);
	        return $lesLignes;
    	}

		//*************Fonction de connexion*******//
			public function connexion($login,$mdp)
	    {
	        $req = "SELECT * FROM users WHERE LOGIN='$login' AND MDP='$mdp'";
	        echo $req;
	        $var =Pdofreycenet::$monPdo->query($req);
	        // recupére la ligne corepondant au paramétres rentrés
	        $laLigne = $var->fetch();
	        return $laLigne;
	    }
	    public function Inscription($nom,$prenom,$login,$mdp)
	    {
	        $req = "Insert into users (idUser,nom, prenom, login, mdp,droit) VALUES(null,'$nom','$prenom','$login','$mdp',0/* par default le droit est défini à zero=utilisateur 1=admin*/)";
	        //echo $req;
	        Pdofreycenet::$monPdo->exec($req);
	    }

		
	}
?>