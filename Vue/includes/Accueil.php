<script>
		window.onload= defilImg

		//1 little picture
		current_img2 = 0;
		arrImg2 = ['Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f1415146.jpg',
					 'Vue/img/Chevreuil.jpg',
					 'Vue/img/photos_paysage/les_Barthes/f0277034.jpg',
					 'Vue/img/agricole.jpg',
					 'Vue/img/freycenet2.jpg']

		//2 little picture
		current_img2A = 0;
		arrImg2A = [ 'Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0437290.jpg',
						'Vue/img/renard.jpg',
						'Vue/img/photos_paysage/les_Barthes/f3421674.jpg',
						'Vue/img/ch.jpg',
						'Vue/img/eglise.jpg']

		//3 little picture
		current_img = 0;
		arrImg = ['Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0434666.jpg',
					'Vue/img/lievre.jpeg',
					'Vue/img/photos_paysage/les_Barthes/etang2.jpg',
					'Vue/img/Petanque.jpg',
					'Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0440554.jpg']

		//4 little picture
		current_imgA = 0;
		arrImgA = ['Vue/img/fichier_du_20190611075017.jpg',
					'Vue/img/vaches.jpg',
					'Vue/img/photos_paysage/les_Barthes/etang.jpg',
					'Vue/img/eolienne.jpeg',
					'Vue/img/freycenet1.jpg']

		//Big picture
		current_img3 = 0;
		arrImg3 = ['Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0439274.jpg',
					'Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f1406762.jpg',
					'Vue/img/photos_paysage/les_Barthes/f0362730.jpg',
					'Vue/img/mairie.jpg',
					'Vue/img/photos_paysage/photos_paysage_freycenet_la_tour/f0438122.jpg']	


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
			<img class="imgA3" id='tutu' src='blank.jpg' width="550" height="310"/>
		</div>
		<div  class="imgAccueil2">		 
			<img class="imgA3" id='tata' src='blank.jpg' width="400" height="250"/>
			<img class="imgA3" id='tuta' src='blank.jpg' width="400" height="250"/> 
			<img class="imgA3" id='toto' src='blank.jpg' width="400" height="250"/>
			<img class="imgA3" id='tuto' src='blank.jpg' width="400" height="250"/>
		</div>
	</div>
	<div class="container" align="center">
		<h4 class="cadre">Données sur Freycenet la tour</h4>
	</div>
	<div class="format">
		<table class="table table-striped fondtext3">
			<tr class="tableL">
  				<th>Habitants</th>
  				<th>Superficie</th>
  				<th>Altitude</th>
  				<th>Coordonnées géographiques</th>
			</tr>
			<tr class="tableL2">
  				<td align="center"><b>99</b></td>
		      	<td align="center"><b>7.93km²</b></td>
		      	<td align="center"><b>Entre 964m et 1244m</b></td>
		      	<td align="center"><b>44.09389, 4.05972</b></td>
			</tr>
		</table>
	</div>
	<div class="container" align="center">
		<h4 class="cadre">Les communes les plus proches de Freycenet-la-Tour</h4>
	</div>
	<div class="format">
		<iframe class="frame" src="https://www.google.com/maps/d/u/0/embed?mid=1jmbypxSLZdbRCKv_uHmeXiCz-I2yvuEj" width=100% height="500"></iframe>
	</div>
</section>