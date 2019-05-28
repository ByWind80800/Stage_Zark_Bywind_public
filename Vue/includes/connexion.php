<div class="colorfont text-center">
    <div class="container" style="padding: 10px;">
        <h1 class="font1">Connexion</h1>
        <div class="d-flex flex-row justify-content-center">
            <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=ValiderConnexion">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control"  placeholder="Login..." name="login">
                </div>
                <div class="form-group"style="width: 300px;">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe..." name="mdp">
                </div>
                <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">Se connecter</button>
            </form>
        </div>
    </div>
    <div class="container" style="padding: 10px;">
    <h1 class="font1 text-center">Inscription</h1>
    <div class="d-flex flex-row justify-content-center">
        <form enctype="multipart/form-data" method="POST" action="index.php?page=Controler&param=Inscription">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control"  placeholder="Nom" name="nom">
            </div>
            <div class="form-group"style="width: 300px;">
                <label for="exampleInputPassword1">Prénom</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Prenom" name="prenom">
            </div>
            <div class="form-group"style="width: 300px;">
                <label for="exampleInputPassword1">Login</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login" name="login">
            </div>
            <div class="form-group"style="width: 300px;">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="mdp">
            </div>
            <div class="form-group"style="width: 300px;">
                <label for="exampleInputPassword1">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer le mot de passe" name="mdpConfirmation">
            </div>
            <button type="submit" class="btn btn-outline-secondary marginAuto w-100" value="connexion">S'inscrire</button>
        </form>
    </div>
</div>
