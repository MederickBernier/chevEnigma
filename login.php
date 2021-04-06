<?php
$title = "Chevaleresk - Connexion";

include_once __DIR__.'/views/header.php';
?>

<div class="row center-align">
    <h5>Connexion à Chevaleresk</h5>
</div>

<div class="row">
    <form class="col s12 z-depth-1" action="src/users/loginUsers.php" method="POST">
        <div class="row">
            <div class="input-field col s6">
            <i class="material-icons prefix">person</i>
            <input placeholder="Nom d'utilisateur" id="username" type="text" class="validate" data-length="20" name="username">
            <label for="username">Nom d'utilisateur:</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">password</i>
                <input placeholder="Mot de passe" id="password" type="password" data-length="20" class="validate" name="password">
                <label for="password">Mot de passe:</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="btn btn-large indigo lighten-3 waves-effect waves-light white-text" type="submit">Connexion</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once __DIR__.'/views/footer.php';
?>