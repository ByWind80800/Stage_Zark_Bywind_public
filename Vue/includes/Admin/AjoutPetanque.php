<section>
	<div class="container" style="padding: 10px;">
        <h1>Ajouter un évènement</h1>
        <div class="d-flex flex-row justify-content-center">
            <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutEvent">
                <div class="form-group">
                    <label class="font3">Libelle</label>
                    <input type="text" class="form-control"  placeholder="Libelle..." name="libellePetanque">
                </div>
                <div class="form-group">
                    <label class="font3">Descriptif</label>
                    <textarea type="text" class="form-control"  placeholder="Descriptif..." name="descriptifPetanque" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label class="font3">Image</label>
                    <input type="hidden" class="form-control" name="MAX_FILE_SIZE"  value="10000000"  />
                            <label class="btn btn-secondary">
                                Choisir une image&hellip; <input name="Image" type="file" style="display: none;">
                            </label>
                <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Ajouter</button>
            </form>
        </div>
    </div>
</section>