<section>
	<table class="table">
		<tr>
			<th>Titre</th>
			<th>Texte</th>
			<th>Date</th>
		</tr>
		
		<!-- Affichage du tableau -->
			<?php
				foreach ($lesActus as $uneActu) 
				{
					echo "<tr>";
					echo "<td>".$uneActu['TITREACTU']."</td>";
					echo "<td>".$uneActu['TEXTEACTU']."</td>";
					echo "<td>".$uneActu['DATEACTU']."</td>";
					echo "<td><a href='index.php?page=Controler&param=ModifNouvelle'><i class='fas fa-edit'></i></a></td>";
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
				<?php
			}
		?>
		</tr>
	</table>
</section>