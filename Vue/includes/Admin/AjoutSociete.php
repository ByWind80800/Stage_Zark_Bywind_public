<section>
	<div class="container" style="padding: 10px;">
        <h1 class="font2">Ajouter une société</h1>
        <div class="d-flex flex-row justify-content-center">
            <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutSociete">
                <div class="form-group">
                    <label class="font3">Nom Entreprise</label>
                    <input type="text" class="form-control"  placeholder="Nom Entreprise..." name="nomentreprise">
                </div>
                <div class="form-group">
                    <label class="font3">Nom du Gérant</label>
                    <textarea type="text" class="form-control"  placeholder="Nom du Gérant..." name="nomgerant" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label class="font3">Corps de métier</label>
                    <textarea type="text" class="form-control"  placeholder="Corps de métier..." name="corpsmetier" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label class="font3">N° Téléphone</label>
                    <textarea type="text" class="form-control"  placeholder="N° de Téléphone..." name="ntelephone" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Ajouter</button>
            </form>
        </div>
    </div>



</section>