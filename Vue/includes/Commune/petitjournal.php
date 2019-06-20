<section>
	<p align="center">Dans chacun des Pdf si dessous vous pourrez apercevoir le calendrier de l'année suivante suivi du contenu du "P'tit Jounral" de l'année demandé.</p>
	<h2 class="soustitre">Tableau des journaux "Le P'tit Journal"</h2>
	<table class="table">
		<tr>
			<?php
			if(isset($_SESSION['droit']))
			{
				?>
				<th>Id Journal</th>
				<?php
			}
			?>
			<th>Lien Journal</th>
			<?php
			if(isset($_SESSION['droit']))
			{
				?>
				<th>Supprimer</th>
				<?php
			}
			?>
		</tr>
		<?php
		$cpt=2011;
		foreach ($lesJournaux as $unJournal) 
		{
			echo "<tr>";
			if(isset($_SESSION['droit']))
			{
				echo "<td align='center'>".$unJournal['IdJournal']."</td>";
			}
			echo "<td align='center'><a href='Vue/LePtitjournal/".$unJournal['cheminJournal']."'>Le P'tit Journal de ".$cpt."</a></td>";
			echo "<td align='center><a hre=''><i class='fas fa-trash-alt fa-2x'></i></a></td>'";
			
			$cpt= $cpt+1;
			echo "</tr>";
		}
		?>
		<tr>
			<?php
			if(isset($_SESSION['droit']))
			{
				?>
				<td align='center'><a href="index.php?page=Controler&param=ajoutelu"><i class='fas fa-plus'></i></a></td>
				<td></td>
				<td></td>
				<?php
			}
			?>
		</tr>
	</table>
	
</section>