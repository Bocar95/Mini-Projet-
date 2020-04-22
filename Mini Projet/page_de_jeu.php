
<?php
    require_once('fonctions.php');
    is_connect();
?>

<div class="container_page_de_jeu">

    <div class="container-header_page_de_jeu">

            <div class="avatar_page_de_jeu">
                <img src="<?= $_SESSION['user']['photo']; ?>" class="image-ronde_joueur">
                    <div class="nom_prenom_joueur">
                        <p>
                            <strong>
                                <?php
                                    echo $_SESSION['user']['prenom'];
                                ?>
                                <br>
                                <?php
                                    echo $_SESSION['user']['nom'];
                                ?>
                            </strong>
                        </p>
                    </div>
            </div>

        <div class="title_page_de_jeu">
            <strong>BIENVENUE SUR LA PLATFORME DE JEU DE QUIZZ JOUEUR ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRAL</strong>
        </div>
        <form action="" method="POST" id="form-connexion">
            
                <button type="submit" class="btn-form-page_de_jeu" name="btn_submit_page_de_jeu" id=""><a href="index.php?statut=logout">Deconnexion</a></button>
        
        </form>

    </div>

    <div class="zone-affichage_page_de_jeu_Questions">
    </div>

    <div class="zone-affichage_page_de_jeu_Scores">

        <div class="option_score">

            <div class="top_scores">
                <ul>
                    <li class="menu-top_scores">
                            <a href="index.php?lien=jeu&page=top_scores">Top Scores</a>
                    </li>
                </ul>
            </div>
            <div class="mon_meilleur_score">
                <ul>
                    <li class="menu-mon_meilleur_score">
                            <a href="index.php?lien=jeu&page=mon_meilleur_score">Mon Meilleur Score</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="affichage_score">
            <?php
                if (isset($_GET['page'])){
                    switch($_GET['page']){
                        case "top_scores":
                            include("top_scores.php");
                        break;
                        case "mon_meilleur_score":
                            require_once("mon_meilleur_score.php");
                        break;
                        default;
                    }
                }
            ?>
        </div>

    </div>

</div>



<style>

/* HEADER PAGE DE JEU */ /* HEADER PAGE DE JEU */ /* HEADER PAGE DE JEU */ /* HEADER PAGE DE JEU */ /* HEADER PAGE DE JEU */

.container_page_de_jeu {
    position: relative;
    top: 2%;
    left: 3%;
    height: 96%;
    width: 94%;
    background-color: rgb(231, 223, 223);
}

.container-header_page_de_jeu {
    height: 100px;
    background-color: #51bfd0;
}

.avatar_page_de_jeu {
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 5px;
    text-align: center;
    width: 5%;
    height: 100%;
}

.image-ronde_joueur {
    float: left; 
    width : 65px; 
    height : 65px; 
    margin-left: 1%; 
    margin-top: 0%; 
    border: none; 
    -moz-border-radius : 75px; 
    -webkit-border-radius : 75px; 
    border-radius : 75px;
}

.nom_prenom_joueur p{
    float: left; 
    margin-top: 2%; 
    left: 15%; 
    position: relative;
    color: white;
}

.title_page_de_jeu {
    float: left;
    width: 75%;
    position: relative;
    top: -100%;
    left: 5%;
    color: white;
    font-size: 30px;
    font-weight: bold;
    padding: 0px;
    text-align: center;
}

.btn-form-page_de_jeu {
    float: right;
    right: 2%;
    top: 5%;
    padding: 10px;
    color: white;
    background-color: #3addd6;
    font-size: 12px;
    font-weight: bold;
    border-radius: 5px;
    border: 1px solid darkturquoise;
    text-decoration: none;
    position: absolute;
    width: 10%;
    
}

.btn-form_page_de_jeu a {
    text-decoration: none;
    color: white;
}

.form-control_page_de_jeu {
    width: 100%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    font-size: 12px;
    font-weight: bold;
    color: silver;
}

/* ZONE AFFICHAGE PAGE DE JEU */ /* ZONE AFFICHAGE PAGE DE JEU */ /* ZONE AFFICHAGE PAGE DE JEU */ /* ZONE AFFICHAGE PAGE DE JEU */

.zone-affichage_page_de_jeu_Questions {
    float: left;
    width: 65%;
    height: 75%;
    top: 20%;
    left: 2%;
    border: 2px solid darkturquoise;
    border-radius: 5px 5px 5px 5px;
    background-color: white;
    position: absolute;
}

.zone-affichage_page_de_jeu_Scores {
    float: right;
    width: 28%;
    height: 75%;
    top: 20%;
    right: 2%;
    border-radius: 5px 5px 5px 5px;
    background-color: white;
    position: absolute;
}

.affichage_score {
    float: right;
    width: 95%;
    height: 80%;
    top: 15%;
    right: 2%;
    border-radius: 5px 5px 5px 5px;
    position: absolute;
}

</style>


