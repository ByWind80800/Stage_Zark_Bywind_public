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
        case 'AjoutElu':
        {
            ?>
            <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Elu du conseil municipal ajouté !</b></h1>
                        <p class="font3">(Retour automatique à la page des conseillés municipaux)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=ConseilMunicipal';", 3000);
                </script>
            <?php
            break;
        }
        case 'AjoutSociete':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Société ajoutée !</b></h1>
                        <p class="font3">(Retour automatique à Administration)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Admin';", 3000);
                </script>
                <?php
                break;
            }
        case 'AjoutEvent':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-success">
                        <h1 class="card-text"><b class="font2">Évènement ajoutée !</b></h1>
                        <p class="font3">(Retour automatique à Administration)</p>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Admin';", 3000);
                </script>
                <?php
                break;
            }

//Code LAURA//

        //message par rapport a la connexion//

        case 'connexionVrai':
            {
                ?>
                    <div class="card">
                        <div class="card-body bg-success">
                            <?php echo '<h1 class="card-text"> <b class="font2">Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . '</b></h1>';
                            echo '<p class="font3">(Retour automatique à Accueil)</p>' ?>
                        </div>
                        <script>
                            setTimeout("location.href = 'index.php?page=Controler&param=Accueil';", 3000);
                        </script>
                    </div>
                <?php
                break;
            }

            case 'connexionFaux':
            {
                ?>
                    <div class="card">
                        <div class="card-body bg-danger">
                            <h1 class="card-text"><b class="font2">Erreur : Mot de passe ou login non correct.</b></h1>
                        </div>
                    </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Connexion';", 3000);
                </script>
                <?php
                break;
            }
        //message par rapport a l'inscription//
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

            case 'ErreurLogin':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-danger">
                        <h1 class="card-text"><b class="font2">Erreur le login existe déja</b></h1>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Connexion';", 3000);
                </script>
                <?php
                break;
            }

            case 'ErreurPasse':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-danger">
                        <h1 class="card-text"><b class="font2">Erreur : les mots de passe ne sont pas identiques.</b></h1>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Connexion';", 3000);
                </script>
                <?php
                break;
            }

            case 'ErreurEmpty':
            {
                ?>
                <div class="card">
                    <div class="card-body bg-danger">
                        <h1 class="card-text"><b class="font2">Erreur un champ est vide</b></h1>
                    </div>
                </div>
                <script>
                    setTimeout("location.href = 'index.php?page=Controler&param=Admin';", 3000);
                </script>
                <?php
                break;
            }

            

        
    }
}
?>






