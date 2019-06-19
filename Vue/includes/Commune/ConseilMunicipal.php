<section>
	<table border="2" class="table">
		<tr>
			<?php
			if(isset($_SESSION['droit']))
			{
				?>
				<th>id</th>
				<?php
			}
			?>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Profession</th>
			<!-- <th>Photos</th> -->
			<?php
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
				if(isset($_SESSION['droit']))
				{
					echo "<td>".$unElu['IDELU']."</td>";
				}
				echo "<td>".$unElu['NOMELU']."</td>";
				echo "<td>".$unElu['PRENOMELU']."</td>";
				echo "<td>".$unElu['FONCTIONELU']."</td>";
				//echo "<td>".$unElu['PHOTOELU']."</td>";
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
			if(isset($_SESSION['droit']))
			{
				?>
				<td><a href="index.php?page=Controler&param=ajoutelu"><i class='fas fa-plus'></i></a></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<!-- <td></td> -->
				<?php
			}
		?>
		</tr>
	</table>
</section>