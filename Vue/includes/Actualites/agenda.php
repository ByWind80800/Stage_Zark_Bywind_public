<section>
	<table class="table">
		<tr>
			<?php
			if(isset($_SESSION['droit']))
			{
				?>
				<th></th>
				<?php
			}
			?>
			<th>Libelle</th>
			<th>Descriptif</th>
			<?php
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
					if(isset($_SESSION['droit']))
					{
						echo "<td>".$unEvent['IDEVENT']."</td>";
					}

					echo "<td>".$unEvent['LIBELLEEVENT']."</td>";
					echo "<td>".$unEvent['DESCRIPTIF']."</td>";
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
</section>