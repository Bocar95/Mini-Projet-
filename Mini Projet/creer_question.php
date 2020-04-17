

    <div class="header-zone-liste-joueurs">
            <div class="title-header-zone-liste-joueurs">
                <p><b>PARAMÉTRER VOTRE QUESTION<b></p>
            </div>
        </div>
        <div class="body-zone-liste-joueurs">
            <div class="cadre-zone-liste-joueurs">
                <form action="" method="post">

                    <label for="question">Question
                        <input type="text-area" name="question">
                    </label>
                    <br>
                    <br>
                    <label for="points">Nbre de Point
                        <select name="nbr_point" value="nbr_point" for="nbr_point">
                            <option value="0">0</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </label>
                    <br>
                    <br>
                    <label for="type">Type de réponse
                        <select name="type_reponse" value="type_reponse" for="type_reponse">
                            <option></option>
                            <option value="type_reponse_1">Réponse à choix multiples (avec une seule réponse possible)</option>
                            <option value="type_reponse_2">Réponse à choix multiples (avec plusieurs réponse possible)</option>
                            <option value="type_reponse_3">Réponse texte à saisir</option>
                        </select>
                    </label>

            </div>
        </div>
        <div class="footer-zone-liste-joueurs">
            <button type="submit" name="button-enregistrer-liste-question" class="button-enregistrer-liste-question">Enregistrer</button>
        </div>
    </div>
    </form>

<style>

.header-zone-liste-joueurs {
    width: 100%;
    height: 12%;
    border-radius: 5px 5px;
    background-color: white;
}

.title-header-zone-liste-joueurs {
    width: 65%;
    height: 70%;
    top: 30%;
    left: 22%;
    position: relative;
}

.title-header-zone-liste-joueurs p {
    display: inline;
    font-size: 25px;
    color: darkturquoise;
}

.body-zone-liste-joueurs {
    width: 100%;
    height: 76%;
    background-color: white;
}

.cadre-zone-liste-joueurs {
    width: 94%;
    height: 95%;
    top: 2%;
    left: 2.5%;
    border: 1px solid darkturquoise;
    border-radius: 10px 10px 10px 10px;
    position: relative;
}

.footer-zone-liste-joueurs {
    width: 100%;
    height: 12%;
    border-radius: 0px 0px 5px 5px;
}

.button-enregistrer-liste-question {
    float: right;
    width: 20%;
    height: 60%;
    top: 20%;
    right: 5%;
    background-color: darkturquoise;
    color: white;
    border-radius: 5px 5px;
    position: relative;
}

</style>