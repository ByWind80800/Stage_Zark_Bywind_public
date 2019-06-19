<section>
	<!-- Barre de navigation -->
	<nav>
		<ul>
			<li class="menu-accueil">
				<a href="index.php?page=Controler&param=Accueil">Accueil</a>
			</li>

			<li class="menu-actualite">Actualité
				<ul class="submenu">
					<li><a href="index.php?page=Controler&param=nouvelles">Nouvelles</a></li>
					<li><a href="index.php?page=Controler&param=agenda">Agenda</a></li>
					<li><a href="index.php?page=Controler&param=retrophotos">Rétrophotos</a></li>
				</ul>
			</li>
		

			<li class="menu-commune">Commune
					<ul class="submenu">
						<li><a href="index.php?page=Controler&param=Mairie">Mairie</a></li>
						<li><a href="index.php?page=Controler&param=ConseilMunicipal">Conseil Municipal</a></li>
						<li><a href="index.php?page=Controler&param=equipementMunicipaux">Espaces Communaux</a></li>
						<!-- <li><a href="index.php?page=Controler&param=travaux">Travaux</a></li> -->
						<li><a href="index.php?page=Controler&param=petitjournal">Le petit Journal</a></li>
					</ul>
				</li>


			<li class="menu-services">Services
					<ul class="submenu">
						<li><a href="index.php?page=Controler&param=EspaceNum">Espaces numérique</a></li>
						<!-- <li><a href="index.php?page=Controler&param=RamassOm">Ramassage des ordures ménagères</a></li>
						<li><a href="index.php?page=Controler&param=Eau">Eau potable</a></li> -->
						<li><a href="index.php?page=Controler&param=SalleCommunale">Salle communale</a></li>
						<li><a href="index.php?page=Controler&param=Societe">Entreprises et société</a></li>
					</ul>
				</li>


			<li class="menu-association">Association
					<ul class="submenu">
						<li><a href="index.php?page=Controler&param=comiteFete">Comité des fêtes</a></li>
						<li><a href="index.php?page=Controler&param=Chasse">association de la chasse</a></li>
						<li><a href="index.php?page=Controler&param=Petanque">association de la pétanque</a></li>
					</ul>
				</li>

			<li class="menu-decouverte">Découverte
				<ul class="submenu">
					<li><a href="index.php?page=Controler&param=histoire">Histoire</a></li>
					<!-- <li><a href="index.php?page=Controler&param=Parcours">Parcours de Freycenet</a></li> -->
				</ul>
			</li>
			<li class="menu-connexion">
				<?php
            if(isset($_SESSION['droit']))
            {
                ?><a href="index.php?page=Controler&param=Deconnexion">Déconnexion</a> <?php
            }
			else
			{
				?>
				<a href="index.php?page=Controler&param=Connexion">Connexion</a>
				<?php
			}
			?>
			</li>
			<img src="Vue/img/logo.png" align="right" class="logo">					
		</ul>
	</nav>
<br/>
</section>
