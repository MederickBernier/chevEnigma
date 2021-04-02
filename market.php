<?php
$title = "Chevaleresk - Marché";

include_once __DIR__.'/views/header.php';
?>

<div id="marketBody" class="row z-depth-3">
    <div class="col s12 m12 l12">
        <div class="row">
            <div class="col s12 m6 l6">
                <h4>Bienvenue sur le Marché</h4>
            </div> 
            <div class="col s12 m6 l6">
                <nav>
                    <div class="nav-wrapper teal lighten-4">
                        <form>
                            <div class="input-field">
                                <input id="marketSearch" type="search" required>
                                <label class="label-icon" for="marketSearch"><i class="material-icons black-text">search</i></label>
                                <i class="material-icons black-text">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12 m12 l12">
                <h4 class="center-align">Résultats de la recherche</h4>
            </div>
            <div class="col s12 m12 l12">
                <h5>Filtres de recherche</h5>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <form>
                        <div class="col s12 m6 l6">
                            <p>
                                <label>
                                    <input name="filter" type="radio" name="alphabetical" checked">
                                    <span>Ordre Alphabétique</span>
                                </label>
                            </p>
                        </div>
                        <div class="col s12 m6 l6">
                            <p>
                                <label>
                                    <input name="filter" type="radio" name="pricing">
                                    <span>Ordre de prix</span>
                                </label>
                            </p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12 m12 l12">
                <table class="centered responsive-table">
                    <thead>
                        <th scope="col">Image</th>
                        <th scope="col">Nom de l'item</th>
                        <th scope="col">Quantité en Inventaire</th>
                        <th scope="col">Prix Unitaire</th>
                        <th scope="col">Critique</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Image</td>
                            <td>Item 1</td>
                            <td>500</td>
                            <td><img class="ecu" src="assets/img/ecus.jpg"> 1.50</td>
                            <td>1.25 / 5</td>
                            <td>
                                <a href="#" class="waves-effect waves-light light-blue ligten-4 btn-small">Voir la description</a> 
                                <a href="#" class="waves-effect waves-light btn-small">Ajouter au panier</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>Item 2</td>
                            <td>10</td>
                            <td><img class="ecu" src="assets/img/ecus.jpg"> 1500</td>
                            <td>3.5 / 5</td>
                            <td>
                                <a href="#" class="waves-effect waves-light light-blue ligten-4 btn-small">Voir la description</a> 
                                <a href="#" class="waves-effect waves-light btn-small">Ajouter au panier</a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__.'/views/footer.php';
?>