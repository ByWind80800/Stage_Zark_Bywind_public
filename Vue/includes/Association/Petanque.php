<section>
	<h2 class="titrePetanque">Association de la pétanque de la Tour</h2>
	<?php
		if(isset($_SESSION['droit']))
		{
			?>
				<a href='index.php?page=Controler&param=AjoutPetanque'>
					<button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Ajouter</button>
				</a>
			<?php
		}
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<?php 
						foreach ($EventPetanque as $unEventP) 
						{
							echo $unEventP['DESCRIPTIF'];
						}
					?>
				</div>
			</div>
		</div> 
</section>