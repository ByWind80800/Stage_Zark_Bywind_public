<section>
	<h2>Photos étang des Barthes</h2>
	<div class="container">
		<div align="center">
			<div class="row">
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/les_Barthes/f0277034.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/les_Barthes/f0357034.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/les_Barthes/f0372202.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/les_Barthes/f0578154.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
	<h2>Les sucs autour de Freycenet la Tour</h2>
	<div class="container">
		<div align="center">
			<div class="row">
				<div class="col-md-4">
					<img src="Vue/img/photos_paysage/les_sucs_autour_de_freycenet_la_tour/f0538666.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-4">
					<img src="Vue/img/photos_paysage/les_sucs_autour_de_freycenet_la_tour/f0542250.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-4">
					<img src="Vue/img/photos_paysage/les_sucs_autour_de_freycenet_la_tour/f1453482.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
	<h2>Photos paysage Freycenet la Tour</h2>
	<div class="container">
		<div align="center">
			<div class="row">
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0436074.jpg" width="100%" height="75%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0437290.jpg" width="100%" height="75%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f1416234.jpg" width="100%" height="75%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f1391914.jpg" width="100%" height="75%">
				</div>
			</div>
		</div>
	</div>
	<h2>L'Église de Freycenet la Tour</h2>
	<div class="container">
		<div align="center">
			<div class="row">
				<div class="col-md-12">
					<img src="Vue/img/photos_paysage/église de la mairie.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
	<p></p>
	<div class="container">
		<div align="center">
			<div class="row">
				<div class="col-md-12">
					<img src="Vue/img/photos_paysage/Eglise.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>

<?php
foreach ( $lesLignesGalerie as $uneImage )
{
    ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Agrandissement"
               data-image="Vue/img/Galerie/<?php echo $uneImage['nomMedia']?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
               data-target="#image-gallery">
                <img class="img-thumbnail m-3 " style="height: 200px; width: 300px;"
                     src="Vue/img/Galerie/<?php echo $uneImage['nomMedia']?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                     alt="Another alt text">
            </a>
        </div>
    <?php
}
?>