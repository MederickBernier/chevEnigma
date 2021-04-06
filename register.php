<?php
$title = "Chevaleresk - Créer un compte";

include_once __DIR__.'/views/header.php';
?>

<div class="row z-depth-3 white">
    <div class="col s12 m12 l12">
        <div class="row">
            <h3 class="center-align">Enregistrer un Compte sur Chevaleresk</h3>
        </div>
        <form id="registerForm">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field s12 l12 m12">
                        <input placeholder="Nom d'utilisateur" id="username" name="username" type="text" class="validate" autocomplete="off" data-length="20">
                        <label for="username" class="bold">Nom d'utilisateur</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field s12 l12 m12">
                        <input placeholder="Mot de Passe" id="password" name="password" type="password" class="validate" autocomplete="off" data-length="60">
                        <label for="password" class="bold">Mot de passe</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field s12 l12 m12">
                        <input placeholder="Confirmation Mot de Passe" id="confirmPassword" name="confirmPassword" type="password" class="validate" autocomplete="off" data-length="60">
                        <label for="confirmPassword" class="bold">Confirmation du Mot de passe</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field s12 l12 m12">
                        <input placeholder="Nom Complet" id="fullName" name="fullName" type="text" class="validate" autocomplete="off" data-length="70">
                        <label for="fullName" class="bold">Nom Complet</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field s12 l12 m12">
                        <input placeholder="Adresse Courriel" id="email" name="email" type="email" class="validate" autocomplete="off" data-length="70">
                        <label for="email" class="bold">Adresse Courriel</label>
                    </div>
                </div>
            </div>
            <div class="row center-align">
                <div class="col s12 m12 l12">
                    <button class="waves-effect waves-light btn green" type="submit" name="saveNewUser">Enregistrer</button>
                    <button href="javasript:void(0)" class="waves-effect waves-light btn red darken-4" onclick="resetRegisterForm()">Effacer le Formulaire</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once __DIR__.'/views/footer.php';
?>