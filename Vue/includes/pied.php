<section>
	<footer>
		<h1 class="titrepied">Comment contacter la commune ?</h1><br/>
		<div class="container">
			<div align="center">
				<div class="row">
					<div class="col-md-3">
						<p><b>Par téléphone</b></p>
						<p><i class="fas fa-phone-square fa-3x"></i></p>
						<p>04 71 03 83 55</p>
					</div>
					<div class="col-md-3">
						<p><b>Par mail</b></p>
						<p><i class="fas fa-envelope-square fa-3x"></i></p>
						<p><a class="formulaire" href="mailto:contact@moto.com">mairiefreycenetlatour@orange.fr</a></p>
					</div>
					<div class="col-md-3">
						<p><b>Se rendre en mairie</b></p>
						<p><i class="fas fa-map-marker-alt fa-3x"></i></p>
						<p><address>2 Rte des Barthes 43150 Freycenet-la-Tour</address></p>
					</div>
					<div class="col-md-3"><p><b>Horaires d'ouverture</b></p>
						<p><i class="far fa-clock fa-3x"></i></p>
						<p>Le lundi de 10h00 à 12h00 et de 14h00 à 16h00 <br/>
						Le jeudi de 10h00 à 12h00 et de 14h00 à 16h00</p>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<i class="far fa-copyright"></i><font size="2"> copyright</font>
		</div>
	</footer>
</html>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- js pour la galerie-->
<script>
    let modalId = $('#image-gallery');
    $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }
            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */
            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;
                $('#show-next-image, #show-previous-image')
                    .click(function () {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });
                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                        .text($sel.data('title'));
                    $('#image-gallery-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }
                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function () {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function () {
                        updateGallery($(this));
                    });
            }
        });
    // build key actions
    $(document)
        .keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;
                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
</script>