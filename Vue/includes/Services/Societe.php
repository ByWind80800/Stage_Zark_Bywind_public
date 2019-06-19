<section>
	<h2 class="soustitre">Les Sociétés à Freycenet-la-Tour</h2>
	<table border="2" class="tableau">
		<tr>
			<?php
				if(isset($_SESSION['droit']))
				{
					?>
					<th>id</th>
					<?php
				}
				?>

			<th>Nom Société</th>
			<th>Nom du gérant</th>
			<th>Corps de métier</th>
		</tr>
		<tr>
		<?php
			if(isset($_SESSION['droit']))
			{
				?>
				<td>
					<a href='index.php?page=Controler&param=ajoutsociete'>
						<i class='fas fa-plus' fa-3x>	
						</i>
					</a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<?php
			}
		?>
		</tr>	

		<!-- Affichage du tableau -->
			<?php
				foreach ($lesSocietes as $uneSociete) 
				{
					echo "<tr>";
					if(isset($_SESSION['droit']))
					{
						echo "<td>".$uneSociete['IDENTREPRISES']."</td>";
					}

					echo "<td>".$uneSociete['NOMENTREPRISE']."</td>";
					echo "<td>".$uneSociete['NOMGERANT']."</td>";
					echo "<td>".$uneSociete['CORPSMETIER']."</td>";
					if(isset($_SESSION['droit']))
					{
						?>
						<th>
							<a href="index.php?page=Controler&param=modifsociete&idEntreprises=<?php echo $uneSociete['IDENTREPRISES']?>">
								<i class="fas fa-edit fa-2x">
								</i>
							</a>
						</th>
						<th>
							<a href='index.php?page=Controler&param=SupprSociete&idEntreprises=<?php echo $uneSociete['IDENTREPRISES']?>'>
								<i class='fas fa-trash-alt fa-2x'></i>
							</a>
						</th>
						<?php
					}
					
				}
			?>
		</tr>	
	</table>
</section>