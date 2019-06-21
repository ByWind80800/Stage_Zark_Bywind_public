<section>
	<h2 class="soustitre">Ajouter un "P'tit Journal"</h2>
	<div class="d-flex flex-row justify-content-center">
        <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutJournal">
            <div class="form-group">
                <label class="font3">Journal</label>
                <input type="hidden" class="form-control" name="MAX_FILE_SIZE"  value="10000000"  />
                <label class="btn btn-secondary">
                    Choisir un journal&hellip; <input name="PDF" type="file" style="display: none;">
                </label>

            </div>
            <button type="submit" class="btn btn-outline-secondary marginAuto w-100">Ajouter</button>
        </form>
    </div>
</section>