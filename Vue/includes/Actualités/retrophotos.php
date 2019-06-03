<section>
	<h2>Photos Éthan des Barthes</h2>
	<div class="container">
		<div align="center">
			<div class="row">
				<div class="col-md-3">
					<img src="Vue/img/f0277034.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/f0357034.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/f0372202.jpg" width="100%" height="100%">
				</div>
				<div class="col-md-3">
					<img src="Vue/img/f0578154.jpg" width="100%" height="100%">
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