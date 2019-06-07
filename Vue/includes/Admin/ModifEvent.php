<section>
	<!------------------- MODIFICATION ACTUALITE ------------------->
<?php
    if(!empty($_REQUEST['idEvent'])) 
 {
     ?>

     <div class="colorfont">
     <div class="container" style="padding: 10px;">
     <h1 class="font2">Modification d'un évènement</h1>

     <?php
     foreach ($lesEvents as $unEvent) 
     {
         if ($_REQUEST['idEvent'] == $unEvent['IDEVENT']) 
         {
             ?>
             <div class="d-flex flex-row justify-content-center">
                <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=ModifEvent">
                     <div class="form-group">
                         <label>Libelle</label>
                         <input type="text" class="form-control" name="libelle"
                                value="<?php echo $unEvent['LIBELLEEVENT'] ?>">
                     </div>
                     <div class="form-group">
                         <label class="font3">Descriptif</label>
                         <textarea type="text" class="form-control" name="descriptif"
                                   rows="4"><?php echo $unEvent['DESCRIPTIF'] ?></textarea>
                     </div>
                     <input type="hidden" value="<?php echo $_REQUEST['idEvent'] ?>" name="modifId">
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