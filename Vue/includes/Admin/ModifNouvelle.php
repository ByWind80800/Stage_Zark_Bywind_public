<section>
	<!------------------- MODIFICATION ACTUALITE ------------------->
<?php
    if(!empty($_REQUEST['idActu'])) 
 {
     ?>

     <div class="colorfont">
     <div class="container" style="padding: 10px;">
     <h1 class="font2">Modification d'une actualité</h1>

     <?php
     foreach ($lesActus as $uneActu) 
     {
         if ($_REQUEST['idActu'] == $uneActu['IDACTU']) 
         {
             ?>
             <div class="d-flex flex-row justify-content-center">
                <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=ModifActu">
                     <div class="form-group">
                         <label>Titre</label>
                         <input type="text" class="form-control" name="titre"
                                value="<?php echo $uneActu['TITREACTU'] ?>">
                     </div>
                     <div class="form-group">
                         <label class="font3">Texte</label>
                         <textarea type="text" class="form-control" name="texteActu"
                                   rows="4"><?php echo $uneActu['TEXTEACTU'] ?></textarea>
                     </div>
                     <input type="hidden" value="<?php echo $_REQUEST['idActu'] ?>" name="modifId">
                     <button type="submit" class="btn btn-outline-secondary marginAuto w-100">
                         Modifier
                     </button>
                </form>
             </div>
             
             </div>
             </div>
             <?php
         }
     }
 }
?>
</section>