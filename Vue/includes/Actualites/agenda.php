<section>
	<div class="container">
		<h2 class="cadre">Agenda</h2>
	<table class="table">
		<tr>
			<th>Libelle</th>
			<th>Descriptif</th>
			<?php
				//Si on est admin
				if(isset($_SESSION['droit']))
				{
					?>
					<th>Modifier</th>
					<th>Supprimer</th>
			<?php
				}
			?>
			
		</tr>
		<tr>
		<?php
			//Si on est admin
			if(isset($_SESSION['droit']))
			{
				?>
				<td>
					<a href='index.php?page=Controler&param=ajoutevent'>
						<i class='fas fa-plus' fa-3x>	
						</i>
					</a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<?php
			}
		?>
		</tr>

		<!-- Affichage du tableau -->
			<?php
				foreach ($lesEvents as $unEvent) 
				{
					echo "<tr>";
					echo "<td>".$unEvent['LIBELLEEVENT']."</td>";
					echo "<td>".$unEvent['DESCRIPTIF']."</td>";
					//Si on est en Admin
					if(isset($_SESSION['droit']))
					{
						?>
						<th>
							<a href="index.php?page=Controler&param=modifevent&idEvent=<?php echo $unEvent['IDEVENT']?>">
								<i class="fas fa-edit fa-2x">
								</i>
							</a>
						</th>
						<th>
							<a href='index.php?page=Controler&param=SupprEvent&idEvent=<?php echo $unEvent['IDEVENT']?>'>
								<i class='fas fa-trash-alt fa-2x'></i>
							</a>
						</th>
						<?php
					}
					
				}
			?>
		</tr>
		
	</table>
</div>
</section>