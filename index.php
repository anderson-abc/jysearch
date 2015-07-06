<?php include "my_header.php"; ?>
<div class="container">

    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="radio">
                <label>
                    <input type="radio" id="mode-search" value="mode-search" >
                    Mode Recherche
                </label>    
                <label>
                    <input type="radio" id="mode-valid" value="mode-valid" >
                    Mode Validation
                </label>
                <label>
                    <input type="radio" id="mode-mail" value="mode-mail" >
                    Mode Mail
                </label>            
            </div>
            <br/>
        </div>
        Recherche : <br/>
        <div class="row">
            <div class="col-lg-8">
                <div class="input-group spinner" >
                    Code Plan : <input type="text" class="form-control" value="0">
                    <div class="input-group-btn-vertical">
                        <button class="btn btn-default" type="button">+</button>
                        <button class="btn btn-default" type="button">-</button>
                    </div>
                </div>
                <input type="submit" value="Coller et lancer">


                <div class="col-lg-4">
                    <!--boutons et checkbox a droite-->


                </div>

            </div>
        </div>

    </div>
    <?php include "my_footer.php"; ?>