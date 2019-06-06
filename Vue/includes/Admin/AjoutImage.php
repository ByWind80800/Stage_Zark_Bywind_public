<section>
    <div style="padding: 10px;">
                    <h1 class="font2">Ajouter une image</h1>
                </div>
                <div class="d-flex flex-row justify-content-center">
                    <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=AjoutImage">
                        <div class="form-group">
                            <label class="font3">Image</label>
                            <input type="hidden" class="form-control" name="MAX_FILE_SIZE"  value="10000000"  />
                            <label class="btn btn-secondary">
                                Choisir une image&hellip; <input name="Image" type="file" style="display: none;">
                            </label>

                        </div>
                        <button type="submit" class="btn btn-outline-secondary marginAuto w-100">Ajouter</button>
                    </form>
                </div>
</section>