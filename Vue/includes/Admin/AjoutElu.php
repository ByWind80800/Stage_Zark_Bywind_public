<section>
	<div class="container" style="padding: 10px;">
        <h1>Ajouter un Elu</h1>
        <div class="d-flex flex-row justify-content-center">
            <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutElu">
                <!-- Label pour récupérer le nom de l'élu -->
                <div class="form-group">
                    <label class="font3">Nom</label>
                    <input type="text" class="form-control"  placeholder="Nom..." name="nom">
                </div>

                <!-- Label pour récupérer le prénom de l'élu -->
                <div class="form-group">
                    <label class="font3">Prénom</label>
                    <input type="text" class="form-control"  placeholder="Prenom..." name="prenom">
                </div>

                <!-- Label pour récupérer la fonction de l'élu -->
                <div class="form-group">
                    <label class="font3">Fonction</label>
                    <input type="text" class="form-control"  placeholder="Fonction..." name="fonction">
                </div>

                <!-- Label pour ajouter la photo de l'élu -->
                <!-- <div class="form-group">
                            <label class="font3">Image</label>
                            <input type="hidden" class="form-control" name="MAX_FILE_SIZE"  value="10000000"  />
                            <label class="btn btn-secondary">
                                Choisir une image&hellip; <input name="Image" type="file" style="display: none;">
                            </label>

                        </div> -->
                <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Ajouter</button>
            </form>
        </div>
    </div>
</section>