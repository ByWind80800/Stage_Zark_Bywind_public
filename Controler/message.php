<?php
if(isset($_REQUEST['var'])) {
    $var = $_REQUEST['var'];
    switch ($var) {
        case 'envoyerCommentaire':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Commentaire envoyé !</b></h1>
                        <p class="font3">(Retour automatique à Accueil)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Accueil';", 3000);
                </script>
                <?php
                break;
            }
        case 'AjoutActu':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Actualité ajoutée !</b></h1>
                        <p class="font3">(Retour automatique à Administration)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Admin';", 3000);
                </script>
                <?php
                break;
            }
        case 'AjoutMedia':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Media ajouté !</b></h1>
                        <p class="font3">(Retour automatique à Administration)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Admin';", 3000);
                </script>
                <?php
                break;
            }
        case'AjoutMusique':
        {
           ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Musique ajoutée !</b></h1>
                        <p class="font3">(Retour automatique à Admin_Musique)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Admin_Musique';", 3000);
                </script>
                <?php
                break; 
        }

//Code LAURA//
         case 'connexionVrai':
            {
                ?>
                    <div class="container">
                            <?php echo '<div class="card bg-dark" style="margin:10px;">
                                            <div class="card-body">
                                                <h1 align="center"> <b>Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . '</b></h1>
                                            </div>
                                        </div>';
                            ?>
                            <h3>Mes informations de Connexion :</h3>
                            <table class="table table-hover">
                                <tr><th>Droit</th>
                                    <td>
                                    <?php
                                        if ($_SESSION['droit']==1) {
                                            echo 'Administrateur';
                                        } else {
                                            echo 'Utilisateur';
                                        }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Prénom</th>
                                    <td><?php echo $_SESSION['prenom']?></td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td><?php echo $_SESSION['nom']?></td>
                                </tr>
                                <tr>
                                    <th>Login</th>
                                    <td><?php echo $_SESSION['login']?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php
                break;
            }

            case 'connexionFaux':
            {
                ?>
                    <div class="container"> 
                        <h1><b>Erreur : Mot de passe ou login incorrect.</b></h1>
                        <p>(Retour automatique à la page Connexion)</p>
                    </div>
                     <script>
                        setTimeout("location.href = 'index.php?page=Controler&param=Connexion';", 3000);
                    </script>
                <?php
                break;
            }

            case 'inscriptionVrai':
            {
                ?>
                    <div class="card">
                        <div class="card-body bg-success">
                            <?php echo '<h1 class="card-text"> <b class="font2">Inscription réussie ! Connecte toi.</b></h1>';
                            echo '<p class="font3">(Retour automatique à Connexion)</p>' ?>
                        </div>
                        <script>
                            setTimeout("location.href = 'index.php?page=Controler&param=Connexion';", 3000);
                        </script>
                    </div>
                <?php
                break;
            }

            case 'connexionFauxChampsContact':
            {
                ?>
                    <div class="card">
                        <div class="card-body bg-danger">
                            <h1 class="card-text"><b class="font2">Erreur : Champs à remplir.</b></h1>
                        </div>

                    </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Contact';", 3000);
                </script>
                <?php
                break;
            }

        
    }
}
?>






