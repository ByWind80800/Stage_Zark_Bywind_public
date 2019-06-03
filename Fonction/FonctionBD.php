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
					ORDER BY DESC";
			echo $req;
			$res = Pdofreycenet::$monPdo->query($req);
			$lesActus = $res->fetchAll();
			for ($i=0; $i<$nbLignes; $i++)
			{
				$date = $lesLignes[$i]['dateActu'];
				$lesLignes[$i]['dateActu'] = dateAnglaisVersFrancais($date);
			}
			return $lesActus;
		}

		//*************Fonction de connexion*******//
		public function connexion($login,$mdp)
    {
        $req = "SELECT * FROM users WHERE login='$login' AND mdp='$mdp'";
        echo $req;
        $var =Pdofreycenet::$monPdo->query($req);
        // recupére la ligne corepondant au paramétré rentrés
        $laLigne = $var->fetch();
        return $laLigne;
    }
		
	}
?>