<section>
	<p align="center" class="ecriture">Dans chacun des Pdf si dessous vous pourrez apercevoir le calendrier de l'année suivante suivi du contenu du "P'tit Journal" de l'année demandé.</p>
	<h2 class="cadre">Tableau des journaux "Le P'tit Journal"</h2>
	<table class="table">
		<tr>
			<th>Lien Journal</th>
			<?php
			//Si on est admin
			if(isset($_SESSION['droit']))
			{
				?>
				<th>Supprimer</th>
				<?php
			}
			?>
		</tr>
		<?php
		$cpt=2010;
		foreach ($lesJournaux as $unJournal) 
		{
			echo "<tr>";
			echo "<td align='center'><a href='Vue/includes/Commune/LePtitjournal/".$unJournal['cheminJournal']."' target='new'>Le P'tit Journal de ".$cpt."</a></td>";
			//Si on est admin
			if(isset($_SESSION['droit']))
			{
				//on peut supprimer
				?>
				<td><a href="index.php?page=Controler&param=SupprJournal&IdJournal=<?php echo $unJournal['IdJournal']?>"><i class='fas fa-trash-alt'></i></a></td>
				<?php
			}
			
			$cpt= $cpt+1;
			echo "</tr>";
		}
		?>
		<tr>
			<?php
			//Si on est admin
			if(isset($_SESSION['droit']))
			{
				//On peut ajouter
				?>
				<td align='center'><a href="index.php?page=Controler&param=ajoutjournal"><i class='fas fa-plus'></i></a></td>
				<td></td>
				<td></td>
				<?php
			}
			?>
		</tr>
	</table>
	
</section>