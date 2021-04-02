<?php
$title = "chevaleresk - Application";

include_once __DIR__.'/views/header.php';
?>

<div class="row z-depth-3">
    <div class="col s12 m12 l6">
        <img id="chevalereskImg" src="assets/img/chevaleresk200.png"/>
    </div>
    <div class="col s12 m12 l6">
        <h4>Bienvenue sur le site Chevaleresk !</h4>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <a class="waves-effect waves-light btn-large deep-orange darken-4 white-text" href="login.php"><i class="material-icons">cloud</i> Connectez vous</a>
            <a class="waves-effect waves-light btn-large blue-grey darken-2 white-text" href="register.php"><i class="material-icons">app_registration</i> Enregistrez vous</a>
            <a class="waves-effect waves-light btn-large brown darken-1 white-text" href="market.php"><i class="material-icons">store</i> Accéder au marché</a>
        </div>
        <div class="col s12 m12 l12">
            <p>Présentation du site</p>
        </div>
    </div>
</div>

<?php
include_once __DIR__.'/views/footer.php';
?>