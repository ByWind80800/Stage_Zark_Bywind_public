<script>
		window.onload= defilImg
		current_img = 0;
		arrImg = ['Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0440554.jpg','Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f1406762.jpg','Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0438122.jpg']
		 
		current_img2 = 0;
		arrImg2 = ['Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0434666.jpg','Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0437290.jpg','Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f1415146.jpg']

		current_img3 = 0;
		arrImg3 = ['Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0439274.jpg','Vue/img/photos_paysage/les_Barthes/f3421674.jpg','Vue/img/photos_paysage/les_Barthes/f0362730.jpg']

		current_imgA = 0;
		arrImgA = ['Vue/img/Chevreuil.jpg','Vue/img/fichier_du_20190611075017.jpg','Vue/img/photos_paysage/les_Barthes/f0277034.jpg']

		current_img2A = 0;
		arrImg2A = ['Vue/img/ch.jpg','Vue/img/Petanque.jpg','Vue/img/mairie.jpg']
		
		function defilImg(){
		  if(current_img == arrImg.length)
		  current_img = 0;
		  document.getElementById('toto').src = arrImg[current_img++];

		  if(current_imgA == arrImgA.length)
		  current_imgA = 0;
		  document.getElementById('tuto').src = arrImgA[current_imgA++];

		  if(current_img2 == arrImg2.length)
		  current_img2 = 0;
		  document.getElementById('tata').src = arrImg2[current_img2++];

		  if(current_img2A == arrImg2A.length)
		  current_img2A = 0;
		  document.getElementById('tuta').src = arrImg2A[current_img2A++];

		  if(current_img3 == arrImg3.length)
		  current_img3 = 0;
		  document.getElementById('tutu').src = arrImg3[current_img3++];
		  window.setTimeout('defilImg()',4000);
		}
</script>

<section>
	<h2 class="cadre">Bienvenue sur le site de Freycenet la tour</h2>
	<div  class="imgAccueil">
		<div  class="imgAccueil2">		 
			<img class="imgA3" id='toto' src='blank.jpg' width="400" height="250"/>
			<img class="imgA3" id='tuto' src='blank.jpg' width="400" height="250"/>
		</div>
		<div  class="imgAccueil2">		 
			<img id='tutu' src='blank.jpg' width="770" height="530"/>
		</div>
		<div  class="imgAccueil2">		 
			<img class="imgA3" id='tata' src='blank.jpg' width="400" height="250"/>
			<img class="imgA3" id='tuta' src='blank.jpg' width="400" height="250"/>
		</div>
	</div>
	<div class="container">
		<div align="center">
			<h4 class="cadre">Données sur Freycenet la tour</h4>
			<div class="row">
				<div class="col-md-12" align="center">
					<div class="fondtext">
						<p class="colorPre">Nombre d'habitants : 99</p>
						<p class="colorPre">Superficie : 7.93 Km² </p>
						<p class="colorPre">Altitude : entre 964m et 1244m</p>
						<p class="colorPre">Coordonnées géographiques : 44.09389, 4.05972</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div align="center">
			<h4 class="cadre">Les communes les plus proches de Freycenet-la-Tour</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="fondtext">
						<p class="colorPre"><font size="4">Alleyrac</font></p>					
						<p class="colorPre"><font size="4">Lantriac</font></p>
						<p class="colorPre"><font size="4">Le Monastier sur Gazeille</font></p>
						<p class="colorPre"><font size="4">Montusclat</font></p>
						<p class="colorPre"><font size="4">Présailles</font></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fondtext">
						<p class="colorPre">Freycenet la Cuche</p>
						<p class="colorPre">Laussonne</p>
						<p class="colorPre">Les Estables</p>
						<p class="colorPre">Moudeyres</p>
						<p class="colorPre">Saint-Front</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>