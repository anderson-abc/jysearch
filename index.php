<?php include "my_header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="radio">

                <label>
                    <input type="radio" id="mode-search" value="mode-search" name="mode">
                    Mode Recherche
                </label>
                <label>
                    <input type="radio" id="mode-valid" value="mode-valid" name="mode">
                    Mode Validation
                </label>
                <label>
                    <input type="radio" id="mode-mail" value="mode-mail" name="mode">
                    Mode Mail
                </label>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <h3>Recherche : </h3><br/>
        <form action="index.php" method="POST">

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-3">Code Plan : </div>
                        <div class="col-md-3" id="code_plan">
                            <div class="input-group spinner" >
                                <input type="text" class="form-control" value="0">
                                <div class="input-group-btn-vertical">
                                    <button class="btn btn-default" type="button">+</button>
                                    <button class="btn btn-default" type="button">-</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"><input type="submit" class="btn btn-default" value="Coller et lancer"></div>
                    </div>
                </div>
                <br/>
                <input type="checkbox" value="PAV"> Plans mécaniques à validés 
                <input type="checkbox" value="PV"> Plans mécaniques valides 
                <input type="checkbox" value="PEV"> Plans électroniques valides 
                <br/><br/>
                <div class="row">
                    <div class="col-lg-6" border="1">
                        <input type="text" id="first_folder" class="form-control" placeholder="Entrer dossier ..."><br/>
                        <input type="text" id="second_folder" class="form-control" placeholder="Entrer dossier ..."><br/>                 
                        Copier vers : <input type="text" id="copy_into" class="form-control"><br/>
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" value="first_folder_actif"> Actif<br/><br/>
                        <input type="checkbox" value="second_folder_actif"> Actif<br/>
                    </div>
                    <div class="col-md-3">
                        <input class="btn btn-default" type="button" value="Parcourir"><br/>
                        <input class="btn btn-default" type="button" value="Parcourir"><br/>
                        <input class="btn btn-default" type="button" value="Parcourir">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-8">
                        <input type="checkbox" id="sub_folder"> Include les sous-dossiers<br/>
                        <input type="checkbox" id="no_clean_up"> Ne pas effacer entre les recherches
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!--boutons et checkbox a droite-->
                <input type="checkbox" id="first_plan"> Premier plan<br/>
                <input type="checkbox" id="log_box"> Log Box<br/>
                <input type="checkbox" id="quick_open"> Quick Open<br/>
                <input type="checkbox" id="interface_simple"> Interface simple<br/>

            </div>
            <br/>
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <br/>
                    <input class="btn btn-success" type="submit" value="Lancer">
                    <input class="btn btn-danger" type="button" value="Arrêter">
                    <input class="btn btn-warning" type="button" value="Quitter">
                    <input class="btn btn-info" type="button" value="Aide">
                </div>
            </div>
    </div>
</form>
<br/>
<hr/>

<h3>Résultat : </h3><br/>
<div class="row">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Nom</th>
            <th>Chemin</th>
            <th>Taille</th>
            <th>Type</th>
            <th>Format</th>
            <th>Orientation</th>
            <th>Recherche</th>
            <th>Indice</th>
            <th>Date plan</th>
            <th>Validé le : (beta)</th>
            <th>Auteur</th>
            </thead>
            <tbody>
                <tr>
                    <td>file 1 </td>
                    <td>file 2 </td>
                    <td>file 3 </td>
                    <td>file 1 </td>
                    <td>file 2 </td>
                    <td>file 3 </td>
                    <td>file 1 </td>
                    <td>file 2 </td>
                    <td>file 3 </td>
                    <td>file 1 </td>
                    <td>file 2 </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-lg-6">
            Double-cliquez pour ouvrir, Selectionnez et appuyez sur S pour Supprimer, E pour Effacer, R pour Renommer, I pour Indice
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            <img src="public/img/logo.png">
        </div>
    </div>

</div>
</div>

<?php include "my_footer.php"; ?>