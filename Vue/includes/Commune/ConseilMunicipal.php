<section>
	<table border="2" class="table">
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Profession</th>
			<?php
			//Si on est Admin
			if(isset($_SESSION['droit']))
			{
				?>
				<th>Supprimer</th>
				<?php
			}
			?>	
		</tr>
		<!-- Affichage du tableau -->
		<?php
			foreach ($lesElus as $unElu) 
			{
				echo "<tr>";
				echo "<td>".$unElu['NOMELU']."</td>";
				echo "<td>".$unElu['PRENOMELU']."</td>";
				echo "<td>".$unElu['FONCTIONELU']."</td>";
				//si on est admin
				if(isset($_SESSION['droit']))
				{
					?>
					<td>
						<a href="index.php?page=Controler&param=SupprElu&idElu=<?php echo $unElu['IDELU']?>"><i class='fas fa-trash-alt'></i></a>
					</td>
					<?php
				}
			}
			?>
		</tr>
		<tr>
			<?php
			//Si on est en admin
			if(isset($_SESSION['droit']))
			{
				?>
				<td><a href="index.php?page=Controler&param=ajoutelu"><i class='fas fa-plus'>Ajoute un élu</i></a></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<?php
			}
		?>
		</tr>
	</table>
</section>