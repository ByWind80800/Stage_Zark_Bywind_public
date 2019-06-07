<section>
	<!------------------- MODIFICATION SOCIETE ------------------->
<?php
    if(!empty($_REQUEST['idEntreprises'])) 
 {
     ?>

     <div class="colorfont">
     <div class="container" style="padding: 10px;">
     <h1 class="font2">Modification d'une société</h1>

     <?php
     foreach ($lesSocietes as $uneSociete) 
     {
         if ($_REQUEST['idEntreprises'] == $uneSociete['IDENTREPRISES']) 
         {
             ?>
             <div class="d-flex flex-row justify-content-center">
                <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=ModifSociete">
                     <div class="form-group">
                         <label>Nom Entreprise</label>
                         <input type="text" class="form-control" name="nomentreprise"
                                value="<?php echo $uneSociete['NOMENTREPRISE'] ?>">
                     </div>
                     <div class="form-group">
                         <label>Nom du Gérant</label>
                         <input type="text" class="form-control" name="nomdugérant"
                                value="<?php echo $uneSociete['NOMGERANT'] ?>">
                     </div>
                     <div class="form-group">
                         <label>Corps de métier de l'entreprise</label>
                         <input type="text" class="form-control" name="corpsdemétierdel'entreprise"
                                value="<?php echo $uneSociete['CORPSMETIER'] ?>">
                     </div>
                     <input type="hidden" value="<?php echo $_REQUEST['idEntreprises'] ?>" name="modifId">
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