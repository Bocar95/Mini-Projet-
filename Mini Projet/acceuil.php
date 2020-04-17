<?php
is_connect();
?>

<div class="container_acceuil">

    <div class="container-header_acceuil">

        <div class="title_acceuil">
            <strong>CRÉER ET PARAMÉTRER VOS QUIZZ</strong>
        </div>
        <form action="" method="POST" id="form-connexion">
            <div class="input-form_acceuil">
                <button type="submit" class="btn-form-acceuil" name="btn_submit_acceuil" id=""><a href="index.php?statut=logout">Deconnexion</a></button>
            </div>
        </form>

    </div>

    <div class="container_menu">

        <div class="container-header_menu">

            <div class="title_menu">
                <img src="<?= $_SESSION['user']['photo'] ?>" class="image-ronde">
                    <div class="nom_prenom">
                        <p>
                            <strong>
                                <?php
                                    echo $_SESSION['user']['prenom'];
                                ?>
                                <br>&nbsp;&nbsp;&nbsp;
                                <?php
                                    echo $_SESSION['user']['nom'];
                                ?>
                            </strong>
                        </p>
                    </div>
            </div>

        </div>

        <div class="option">
            <div class="liste-questions">
                <ul>
                    <li class="menu-liste-questions">
                        <form action="" method="post">
                            <button type="submit" name="liste-questions">Liste Questions</button>
                            <img src="images/ic-liste.png" class="icone-1">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="créer-admin">
                <ul>
                    <li class="menu-créer-admin">
                        <form action="" method="post">
                            <button type="submit" name="créer-admin">Créer Admin</button>
                            <img src="images/ic-ajout-active.png" class="icone-2">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="liste-joueur">
                <ul>
                    <li class="menu-liste-joueur">
                    <form action="" method="post">
                        <button type="submit" name="liste-joueur">Liste Joueur</button>
                        <img src="images/ic-liste.png" class="icone-3">
                    </form>
                    </li>
                </ul>
            </div>
            <div class="créer-questions">
                <ul>
                    <li class="menu-créer-questions">
                        <form action="" method="post">
                            <button type="submit" name="créer-questions">Créer Questions</button>
                            <img src="images/ic-ajout.png" class="icone-4">
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="zone-liste-questions">
        <?php 
            if (isset($_POST['liste-questions'])){
                include('questions.php');
            }

            if (isset($_POST['créer-admin'])){
                include('inscription.php');
            }

            if (isset($_POST['liste-joueur'])){
                include('joueur.php');
            }

            if (isset($_POST['créer-questions'])){
                include('creer_question.php');
            }
        ?>
    </div>


</div>


