<section>
	<table border="2">
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
				}
			?>
		</tr>
	</table>
</section>