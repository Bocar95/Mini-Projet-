
    <?php
        if (isset($_SESSION['user']['prenom']) && ($_SESSION['user']['nom'])){
    ?>
                <div class="titre_1">
                    <h1><strong>S'INSCRIRE</strong></h1>
                    <br>
                    <p>Pour proposer des quizz</p>
                </div>

                <div class="ligne_droite">
                    <hr>
                </div>
            
                <form method="POST" action="">
                
                    <div class="label_prenom_utilisateur">
                        <label for="prenom" name="prenom">Prenom</label> <br>
                        <input type="text" name="prenom" id="prenom" placeholder= "Aaaaa" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">                        
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    

                    <div class="label_nom_utilisateur">
                        <label for="nom" name="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder= "BBBBB" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    
                
                    <div class="label_login_utilisateur">
                        <label for="login" name="login">Login</label>
                        <input type="text" name="login" id="login" placeholder= "aaabb"value="<?php if(isset($_POST['login'])) { echo $_POST['login']; } ?>">                        
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    

                    <div class="label_password_utilisateur">
                        <label for="password" name="password">Password</label>
                        <input type="password" name="password" id="password" placeholder= "• • • • • • • • • • • • • • • • •" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    
                    <div class="label_confirm_utilisateur">
                        <label for="confirm" name="confirm">Confirm Password</label>
                        <input type="password" name="confirm" id="confirm" placeholder= "• • • • • • • • • • • • • • • • •" value="<?php if(isset($_POST['confirm'])) { echo $_POST['confirm']; } ?>">
                    </div>
                    <br>
                    

                    <div class="envoi_fichier">
                            <input type="file" name="monfichier">
                    </div>
                    <br>

                    <div class="submit_creer_compte_utilisateur">
                        <a href="interface_joueur.php">
                            <input type="submit" name="creer_compte" value="Creer un compte">
                        </a>
                    </div>
                    <br>

                </form>
        <?php
            if (isset($_SESSION['user']['prenom']) && ($_SESSION['user']['nom'])){
        ?>
        <div class="avatar-inscription-admin">

            <div class="donnees_avatar">
                <img src="<?= $_SESSION['user']['photo'] ?>" class="image-ronde-avatar">
                    <div class="nom_prenom_avatar">
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

        </div>
        <?php
            }
        ?>

    <?php
        }else{
    ?>
    <div class="inscription">
                <div class="titre_2">
                    <h1><strong>S'INSCRIRE</strong></h1>
                    <br>
                    <p>Pour tester votre niveau de culture général</p>
                </div>

                <div class="ligne_droite_1">
                    <hr>
                </div>
            
                <form method="POST" action="">
                
                    <div class="label_prenom_utilisateur_1">
                        <label for="prenom" name="prenom">Prenom</label> <br>
                        <input type="text" name="prenom" id="prenom" placeholder= "Aaaaa" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">                        
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    

                    <div class="label_nom_utilisateur_1">
                        <label for="nom" name="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder= "BBBBB" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    
                
                    <div class="label_login_utilisateur_1">
                        <label for="login" name="login">Login</label>
                        <input type="text" name="login" id="login" placeholder= "aaabb"value="<?php if(isset($_POST['login'])) { echo $_POST['login']; } ?>">                        
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    

                    <div class="label_password_utilisateur_1">
                        <label for="password" name="password">Password</label>
                        <input type="password" name="password" id="password" placeholder= "• • • • • • • • • • • • • • • • •" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>">
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    
                    <div class="label_confirm_utilisateur_1">
                        <label for="confirm" name="confirm">Confirm Password</label>
                        <input type="password" name="confirm" id="confirm" placeholder= "• • • • • • • • • • • • • • • • •" value="<?php if(isset($_POST['confirm'])) { echo $_POST['confirm']; } ?>">
                    </div>
                    <br>
                    

                    <div class="envoi_fichier_1">
                            <input type="file" name="monfichier">
                    </div>
                    <br>

                    <div class="submit_creer_compte_utilisateur_1">
                        <a href="interface_joueur.php">
                            <input type="submit" name="creer_compte" value="Creer un compte">
                        </a>
                    </div>
                    <br>

                </form>
        <?php
            //if (isset($_SESSION['user']['prenom']) && ($_SESSION['user']['nom'])){
        ?>
        <div class="avatar-inscription-admin_1">

            <div class="donnees_avatar">
                <img src="" class="image-ronde-avatar_1">
                    <div class="nom_prenom_avatar_1">
                        <p>
                            <strong>
                                <?php
                                    //echo $_SESSION['user']['prenom'];
                                ?>
                                <br>
                                <?php
                                   // echo $_SESSION['user']['nom'];
                                ?>
                            </strong>
                        </p>
                    </div>
            </div>

        </div>
        <?php
          //  }
        ?>
</div>

    <?php
        }
    ?>
               