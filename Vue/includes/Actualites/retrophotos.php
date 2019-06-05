<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<section>
	<div class="colorfont">
    <div class="container" style="padding: 10px;">
        <h2>Rétrophotos</h2>
        <div class="row">
				<?php
				foreach ($lesLignesImage as $uneImage)
				{
				    ?>
				        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
				            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Agrandissement"
				               data-image="Vue/img/<?php echo $uneImage['CHEMINIMG']?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				               data-target="#image-gallery">
				                <img class="img-thumbnail m-3 " style="height: 200px; width: 300px;"
				                     src="Vue/img/<?php echo $uneImage['CHEMINIMG']?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				                     alt="Another alt text">
				            </a>
				        </div>
				    <?php
				}
				?>
			</div>
		</div>
	</div>


	<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="image-gallery-title"></h4>
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary  bg-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
	                </button>

	                <button type="button" id="show-next-image" class="btn btn-secondary bg-secondary float-right"><i class="fa fa-arrow-right"></i>
	                </button>
	            </div>
	        </div>
	    </div>
	</div>
</section>