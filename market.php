<?php
$title = "Chevaleresk - Marché";

include_once __DIR__.'/views/header.php';
?>

<div id="marketBody" class="row z-depth-3">
    <div class="col s12 m12 l12">
        <div class="row">
            <div class="col s12 m6 l6">
                <h4>Marché Chevaleresk</h4>
            </div> 
            <div class="col s12 m6 l6">
                <nav>
                    <div class="nav-wrapper teal lighten-4">
                        <form>
                            <div class="input-field">
                                <input id="marketSearch" type="search" required class="autocomplete" name="query" autocomplete="off" oninput="changeTextOnSearch()">
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
                <h5 class="center-align">Filtres de Recherche</h5>
            </div>
        </div>
        <div class="row">
            <ul class="collapsible">
                <li>
                    <div class="blue-grey lighten-4 collapsible-header"><i class="material-icons">filter_list</i> <h5>Filtres</h5></div>
                    <div class="collapsible-body blue-grey lighten-5">
                        <div class="row">
                            <form action="#">
                                <div class="col s12 m3 l3">
                                    <p>
                                        <input name="filters" type="radio" checked>
                                        <span> par Type</span>
                                    </p>
                                </div>
                                <div class="col s12 m3 l3">
                                    <p>
                                        <input name="filters" type="radio">
                                        <span> par Ordre Alphabétique</span>
                                    </p>
                                </div>
                                <div class="col s12 m3 l3">
                                    <p>
                                        <input name="filters" type="radio">
                                        <span> par Ordre de Prix</span>
                                    </p>
                                </div>
                                <div class="col s12 m3 l3">
                                    <p>
                                        <input name="filters" type="radio">
                                        <span> par Type suivi d'Alphabétique suivi de Prix</span>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12 m12 l12">
                <h5 class="center-align bold" id="searchMessage">Résultats de la Recherche</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <table class="centered responsive-table" id="marketTable">
                    <thead>
                        <th>Image</th>
                        <th>Nom de l'item</th>
                        <th>Quantité en Inventaire</th>
                        <th>Prix Unitaire</th>
                        <th>Critique</th>
                        <th>Options</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Image 1</td><!-- here the image will have a class of marketImg to be able to format it on the size property -->
                            <td>Item 1</td>
                            <td>500</td>
                            <td><img class="ecu" src="assets/img/ecus.png"> 1.50</td>
                            <td>
                                <span>
                                <i class="material-icons amber-text lighten-2">star</i>
                                <i class="material-icons">star_outline</i>
                                <i class="material-icons">star_outline</i>
                                <i class="material-icons">star_outline</i>
                                <i class="material-icons">star_outline</i>
                                </span>
                            </td>
                            <td>
                                <a href="#" class="waves-effect waves-light light-blue ligten-4 btn-small">Voir la description</a> &nbsp;&nbsp;&nbsp;
                                <a href="#" class="tooltipped waves-effect waves-circle waves-light btn-floating center-align" data-position="bottom" data-tooltip="Ajouter au panier"><i class="material-icons">add</i></a> 
                            </td>
                        </tr>
                        <tr>
                            <td>Image 2</td> <!-- here the image will have a class of marketImg to be able to format it on the size property -->
                            <td>Item 2</td>
                            <td>10</td>
                            <td><img class="ecu" src="assets/img/ecus.png"> 1 500</td>
                            <td>
                                <span>
                                    <i class="material-icons amber-text lighten-2">star</i>
                                    <i class="material-icons amber-text lighten-2">star</i>
                                    <i class="material-icons amber-text lighten-2">star</i>
                                    <i class="material-icons amber-text lighten-2">star_half</i>
                                    <i class="material-icons">star_outline</i>
                                </span>
                            </td>
                            <td>
                                <a href="#" class="waves-effect waves-light light-blue ligten-4 btn-small">Voir la description</a> &nbsp;&nbsp;&nbsp;
                                <a href="#" class="tooltipped waves-effect waves-circle waves-light btn-floating center-align" data-position="bottom" data-tooltip="Ajouter au panier"><i class="material-icons">add</i></a> 
                            </td>
                        </tr>
                        <tr>
                            <td>Image 3</td><!-- here the image will have a class of marketImg to be able to format it on the size property -->
                            <td>Item 3</td>
                            <td>1000</td>
                            <td><img class="ecu" src="assets/img/ecus.png"> 15</td>
                            <td>
                                <span>
                                    <i class="material-icons amber-text lighten-2">star</i>
                                    <i class="material-icons amber-text lighten-2">star</i>
                                    <i class="material-icons amber-text lighten-2">star_half</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                </span>
                            </td>
                            <td>
                                <a href="#" class="waves-effect waves-light light-blue ligten-4 btn-small">Voir la description</a> &nbsp;&nbsp;&nbsp;
                                <a href="#" class="tooltipped waves-effect waves-circle waves-light btn-floating center-align" data-position="bottom" data-tooltip="Ajouter au panier"><i class="material-icons">add</i></a> 
                            </td>
                        </tr>
                        <tr>
                            <td>Image 4</td><!-- here the image will have a class of marketImg to be able to format it on the size property -->
                            <td>Item 4</td>
                            <td>1</td>
                            <td><img class="ecu" src="assets/img/ecus.png"> 15 000</td>
                            <td>
                                <span>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                    <i class="material-icons">star_outline</i>
                                </span>
                            </td>
                            <td>
                                <a href="#" class="waves-effect waves-light light-blue ligten-4 btn-small">Voir la description</a> &nbsp;&nbsp;&nbsp;
                                <a href="#" class="tooltipped waves-effect waves-circle waves-light btn-floating center-align" data-position="bottom" data-tooltip="Ajouter au panier"><i class="material-icons">add</i></a> 
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