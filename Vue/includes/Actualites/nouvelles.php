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
			<th>Titre</th>
			<th>Texte</th>
			<th>Date</th>
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
					<a href='index.php?page=Controler&param=ajoutnouvelle'>
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
				foreach ($lesActus as $uneActu) 
				{
					echo "<tr>";
					if(isset($_SESSION['droit']))
					{
						echo "<td>".$uneActu['IDACTU']."</td>";
					}

					echo "<td>".$uneActu['TITREACTU']."</td>";
					echo "<td>".$uneActu['TEXTEACTU']."</td>";
					echo "<td>".$uneActu['DATEACTU']."</td>";
					if(isset($_SESSION['droit']))
					{
						?>
						<th>
							<a href="index.php?page=Controler&param=modifnouvelle&idActu=<?php echo $uneActu['IDACTU']?>">
								<i class="fas fa-edit fa-2x">
								</i>
							</a>
						</th>
						<th>
							<a href='index.php?page=Controler&param=SupprNouvelle&idActu=<?php echo $uneActu['IDACTU']?>'>
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