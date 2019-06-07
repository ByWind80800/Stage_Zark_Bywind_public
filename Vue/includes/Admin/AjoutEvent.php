<section>
	<div class="container" style="padding: 10px;">
        <h1>Ajouter un évènement</h1>
        <div class="d-flex flex-row justify-content-center">
            <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutEvent">
                <div class="form-group">
                    <label class="font3">Libelle</label>
                    <input type="text" class="form-control"  placeholder="Libelle..." name="libelle">
                </div>
                <div class="form-group">
                    <label class="font3">Descriptif</label>
                    <textarea type="text" class="form-control"  placeholder="Descriptif..." name="descriptif" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Ajouter</button>
            </form>
        </div>
    </div>



</section>