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

		public static function getPdofreycenet()
		{
			if(Pdofreycenet::$monPdofreycenet==null)
			{
				Pdofreycenet::$monPdofreycenet= new Pdofreycenet();
			}
			return Pdofreycenet::$monPdofreycenet;  
		}

		//**************Fonction Get*************//
		
	}
?>