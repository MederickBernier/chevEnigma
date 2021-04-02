<?php
$title = "chevaleresk - Contact";

include_once __DIR__.'/views/header.php';
?>

<div class="row">
    <form class="col s12 z-depth-1">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Prénom" id="first_name" type="text" class="validate" data-length="20">
                <label for="first_name">Prénom</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">account_box</i>
                <input placeholder="Nom de famille" id="last_name" type="text" class="validate" data-length="20">
                <label for="last_name">Nom de famille</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input placeholder="Email" id="email" type="email" class="validate" data-length="40">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="message" class="materialize-textarea" data-length="2000"></textarea>
                        <label for="message">Votre message:</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="btn btn-large deep-orange lighten-3 waves-effect waves-light black-text" type="submit" name="envoyer">Envoyer le message <i class="material-icons right">send</i></button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $('input#first_name,input#last_name,input#email,textarea#message').characterCounter();
    });
</script>

<?php
include_once __DIR__.'/views/footer.php';
?>