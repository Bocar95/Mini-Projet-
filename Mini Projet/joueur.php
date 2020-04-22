

    <div class="header-zone-liste-joueurs">
            <div class="title-header-zone-liste-joueurs">
                <p><em><b>LISTE DES JOUEURS PAR SCORE<b><em></p>
            </div>
        </div>
        <div class="body-zone-liste-joueurs">
            <div class="cadre-zone-liste-joueurs">
            
    <?php
        $js= file_get_contents('utilisateur.json');

        $js= json_decode($js, true);

        foreach ($js as $value){
            if ($value["profil"]=="joueur"){
                $joueur[] = $value;
            }
        }

        $score=[];

        foreach ($joueur as $key => $value){
            array_push($score, $value['score']);
        }

        array_multisort($score, SORT_DESC, $joueur);

        
// PAGINATION... PAGINATION... PAGINATION... PAGINATION... PAGINATION... PAGINATION... PAGINATION... PAGINATION... PAGINATION...

        $total= count($joueur);
        define ('nbrParPage', 15);
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
            
            
            for ($i=$indiceD; $i<=$indiceF; $i++){
                if (isset($joueur[$i])){
    ?>
                <div class="nom_prenom_top_score_joueur">
                    <span class="nom_prenom_joueur">
        <?php
                        echo $joueur[$i]['prenom'];
        ?>
                        &nbsp;
        <?php
                        echo $joueur[$i]['nom'];
        ?>
                    </span>
    
                    <span class="score_joueur">
        <?php
                        echo $joueur[$i]['score'].' pts';
        ?>
                    </span>
        <?php
                }}
        ?>
                </div>
        <?php
            }
            echo '<br>';
            echo '<br>';
            echo '<br>';
            for ($i=1; $i<=$nbreDePage; $i++){
                echo "<a href='index.php?lien=acceuil&page=liste_joueur&fenetre=$i'> P$i </a>";
            }
    ?>

            </div>
        </div>
        <div class="footer-zone-liste-joueurs">
            <form action="" method="post">
            <button type="submit" name="button-suivant-liste-question" class="button-suivant-liste-question">Suivant
            </button>
            </form>
        </div>
    </div>

    

<style>

.nom_prenom_top_score_joueur {
    float: left;
    width: 100%;
}

.score_joueur {
    float: right;
}


</style>
