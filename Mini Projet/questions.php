<?php
    //VALIDATION DE L'INPUT CONTENANT LE NOMBRE DE QUESTION SAISI.

    require_once('fonctions.php');

    $formValide= false;
    $conservation=false;
    $nombre="";
    $msg_erreur="";

    if (isset($_POST['ok'])){     
        if (!is_entier($_POST['nombre'])){
            $msg_erreur="Veullez saisir un nombre entier et positif.";
        }else
            if (!is_number($_POST['nombre'])){
            $msg_erreur="Veullez saisir un nombre entier et positif.";
            }else{
                $nombre=$_POST['nombre'];
                $formValide= true;
            }
    }



?>

    <div class="header-zone-liste-questions">
        
            <div class="form-header-zone-liste-questions">
                <p>Nbr de question/jeu</p>
                <form method="POST" action="">
                    <input type="text" name="nombre" value="<?= $nombre; ?>" class="form-input-header-zone-liste-questions">
                    <input type="submit" name="ok" value="ok" class="form-submit-header-zone-liste-questions">
                </form>
                <span class="erreur" style="float: right; color: red; top: 75%;"><strong> <?= $msg_erreur ?> </strong></span>
            </div>
        </div>

        <div class="body-zone-liste-questions">
            <div class="cadre-zone-liste-questions">
                <?php
                    $liste_questions= file_get_contents('questions.json');
                    $liste_questions= json_decode($liste_questions, true);

                    foreach ($liste_questions as $value){
                        $liste[]= $value;
                    }
                    
                    $total= count($liste);
                    define ('nbrParPage', 5);
                    $nbreDePage=ceil($total/nbrParPage);

                    if (isset($_GET['fenetre'])){
                        $pageActuelle=$_GET['fenetre'];
                        if ($pageActuelle<1){
                            $pageActuelle=1;
                        }
                        elseif ($pageActuelle>$nbreDePage){
                            $pageActuelle=$nbreDePage;
                        }

                        
                        $indiceD=($pageActuelle-1)*nbrParPage;
                        $indiceF=$indiceD + nbrParPage - 1;
                        $cpt=1;

                        for ($i=$indiceD; $i<=$indiceF; $i++){
                            $j=0;
                            if (isset($liste[$i])){
                ?>
                            <div class="questions_et_reponses">
                                <div class="affichage_questions">
                    <?php
                                    echo $cpt.'.'.$liste[$i]['question'];
                    ?>
                                </div>

                                <div class="reponse_possible">
                                    <strong>
                    <?php
                                while (isset($liste[$i]['reponses_possible'][$j])){
                                    if ($liste[$i]['type_reponse']=="multiple"){
                                        if (isset($liste[$i]['reponses_possible'][$j])){
                                            if (isset($liste[$i]['bonnes_reponses'][$j])){
                                                if ($liste[$i]['reponses_possible'][$j]==$liste[$i]['bonnes_reponses'][$j]){          
                                        ?>
                                                    <input type="checkbox" name="checkbox_<?= $cpt; ?>" checked class="btn btn-checkbox">
                                        <?php
                                                }else {
                                                    ?>
                                                        <input type="checkbox" name="checkbox_vide_<?= $cpt; ?>" class="btn btn-checkbox">
                                                    <?php
                                                }
                                            }
                                        }
                                        $cpt++;
                                        echo $liste[$i]['reponses_possible'][$j];
                                    }
                                                    
                                    if ($liste[$i]['type_reponse']=="simple"){
                                            if (isset($liste[$i]['reponses_possible'][$j])){
                                                if (isset($liste[$i]['bonnes_reponses'][$j])){
                                                    if ($liste[$i]['reponses_possible'][$j]==$liste[$i]['bonnes_reponses'][$j]){          
                                            ?>
                                                        <input type="radio" name="radio_<?= $cpt; ?>" checked class="btn btn-radio">
                                            <?php
                                                    }else {
                                                        ?>
                                                            <input type="radio" name="radio_vide_<?= $cpt; ?>" class="btn btn-radio">
                                                        <?php
                                                    }
                                                }
                                            }
                                            $cpt++;
                                            echo $liste[$i]['reponses_possible'][$j];
                                    }
                                                
                                    if  ($liste[$i]['type_reponse']=="text"){
                                ?>
                                        <input type="text" readonly name="Reponse_text_<?= $cpt; ?>" error="error" class="champ" placeholder="<?= $liste[$i]['reponses_possible'][$j] ?>">
                                <?php
                                    }
                                ?>
                                    <br>
                                    <?php
                                    $j++;
                                }
                    ?>
                                    </strong>
                                </div>
                            </div>
                    <?php
                            }
                            $cpt++;
                        }
                    }
                ?>

            <div class="footer-zone-liste-questions">
        <?php
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';

                
                if ($pageActuelle>1){
                    $j=$pageActuelle-1;
                    echo "<a href='index.php?lien=acceuil&page=questions&fenetre=$j'>";
        ?>
                    <button type="submit" name="button-suivant-liste-question" class="button-precedent-liste-question">Précédent</button>
        <?php
                    echo "</a>";
                }

                for ($i=1; $i<=$nbreDePage; $i++){
                    echo "<a href='index.php?lien=acceuil&page=questions&fenetre=$i'></a>";
                }

                if ($i > $pageActuelle){
                    $k=$pageActuelle+1;
                    echo "<a href='index.php?lien=acceuil&page=questions&fenetre=$k'>";?>

                    <button type="submit" name="button-suivant-liste-question" class="button-suivant-liste-question">Suivant</button>
        <?php
                    echo "</a>";
                }
        ?>
            </div>
            </div>
        </div>
    </div>









    <style>

.questions_et_reponses {
    float: left;
    width: 100%;
    /*background: red;*/
    padding: 0px;
    position: relative;
}

.affichage_questions {
    /*background: black;*/
    position: relative;
    float: left;
    width: 98%;
    height: 23px;
    padding: 0px;
    font-size: 20px;
    color: #818181;
    left: 2%;
}

.reponse_possible {
    /*background: blue;*/
    color: black;
    position: relative;
    float: left;
    width: 94%;
    padding: 0px;
    font-size: 14px;
    left: 6%;
}

.button-precedent-liste-question {
    float: left;
    width: 20%;
    height: 60%;
    top: 20%;
    left: 5%;
    background-color: darkturquoise;
    color: white;
    border-radius: 5px 5px;
    position: relative;
}


</style>