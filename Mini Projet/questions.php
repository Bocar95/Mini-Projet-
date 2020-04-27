<?php
    //VALIDATION DE L'INPUT CONTENANT LE NOMBRE DE QUESTION SAISI.

    require_once('fonctions.php');

    $formValide= false;
    $conservation=false;
    $nombre="";
    $msg_erreur="";


    if (isset($_POST['envoie'])){        
        if (is_number($_POST['nombre'])){
            $nombre=$_POST['nombre'];
            $formValide= true;
        }else
            if (!is_entier($_POST['nombre'])){
                $msg_erreur="Veullez saisir un nombre positif.";
            }
    }

?>

    <div class="header-zone-liste-questions">
            <div class="form-header-zone-liste-questions">
                <p>Nbr de question/jeu</p>
                <form method="POST" action="">
                    <input type="text" name="nombre" value="<?= $nombre; ?>" class="form-input-header-zone-liste-questions">
                    <input type="submit" name="envoie" value="ok" class="form-submit-header-zone-liste-questions">
                    <span class="erreur" style="float: right; color: red;"><strong> <?= $msg_erreur ?> </strong></span>
                </form>
            </div>
        </div>
        <div class="body-zone-liste-questions">
            <div class="cadre-zone-liste-questions"></div>
        </div>
        <div class="footer-zone-liste-questions">
            <button type="submit" name="button-suivant-liste-question" class="button-suivant-liste-question">Suivant</button>
        </div>
    </div>
