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
         if ($_REQUEST['idActu'] == $lesActus['idActu']) 
         {
             ?>
             <div class="d-flex flex-row justify-content-center">
                 <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=modifierActu">
                     <div class="form-group">
                         <label class="font3">Titre</label>
                         <input type="text" class="form-control" name="titre"
                                value="<?php echo $lesActus['titreActu'] ?>">
                     </div>
                     <div class="form-group">
                         <label class="font3">Texte</label>
                         <textarea type="text" class="form-control" name="texteActu"
                                   rows="4"><?php echo $lesActus['texteActu'] ?></textarea>
                     </div>
                     <input type="hidden" value="<?php echo $_REQUEST['idActu'] ?>" name="modifId">
                     <button type="submit" class="btn btn-outline-secondary marginAuto w-100">
                         Modifier
                     </button>
             </div>
             </form>
             </div>
             </div>
             <?php
         }
     }
 }
?>
</section>