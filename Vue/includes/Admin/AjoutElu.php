<section>
	<div class="container" style="padding: 10px;">
        <h1>Ajouter un Elu</h1>
        <div class="d-flex flex-row justify-content-center">
            <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutActu">
                <div class="form-group">
                    <label class="font3">Titre</label>
                    <input type="text" class="form-control"  placeholder="Titre..." name="titre">
                </div>
                <div class="form-group">
                    <label class="font3">Texte</label>
                    <textarea type="text" class="form-control"  placeholder="Texte..." name="texteActu" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Ajouter</button>
            </form>
        </div>
    </div>
</section>