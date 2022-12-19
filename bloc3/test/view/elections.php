<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="UTF-8">
        <title>Supporters Solidaires</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
        
    <body>
        <header>
            <h1>Supporters Solidaires</h1>
            
            <nav>
                <div class="icons">
                    <i class="fa-solid fa-burger"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <ul>
                    <li><a href="home.php">Accueil</a></li>
                    <?php if (isset($_SESSION['mail']) && $_SESSION['mail'] == "loyd@mail.fr"){?>
                    <li><a href="concours.php">Listes participants</a></li>
                    <li><a href="elections.php">Résultats vote</a></li>
                    <li><a href="admin.php">Mon compte</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>
                    

                    <?php }elseif (isset($_SESSION['mail'])){?>
                    
                    <li><a href="concours.php">Concours</a></li>
                    <li><a href="elections.php">Élections</a></li>
                    <li><a href="monCompte.php">Mon compte</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php }else {?>

                    <li><a href="jeu.php">Jeu</a></li>
                    <li><a href="vote.php">Vote</a></li>
                    <li><a href="identification.php">S'identifier</a></li>
                    <?php }?>
                </ul>
            </nav>
        </header>

        <section>
            <h1>- Votez pour le joueur et le gardien du match -</h1>

            <div class="global">
                <div class="groupe">
                    <h2>Liste des joueurs</h2>
                    <form id="form">
                        <li>
                            <input type="radio" id="joueur1" name="joueur"/>
                            <label for="joueur">J1</label>
                        </li>

                        <li>
                            <input type="radio" id="joueur2" name="joueur"/>
                            <label for="joueur">J2</label>
                        </li>

                        <li>
                            <input type="radio" id="joueur3" name="joueur"/>
                            <label for="joueur">J3</label>
                        </li>

                        <input type="submit" value="Voter" onclick="checkPassJoueur()"/>
                        
                    </form>
                </div>

                <div class="groupe">
                    <h2>Liste des gardiens</h2>
                    <form id="form1">
                        <li>
                            <input type="radio" id="gardien1" name="gardien"/>
                            <label for="gardien">G1</label>
                        </li>

                        <li>
                            <input type="radio" id="gardien2" name="gardien"/>
                            <label for="gardien">G2</label>
                        </li>

                        <input type="submit" value="Voter" onclick="checkPassGardien()"/>

                    </form>
                </div>
                
            </div>

        </section>

        <footer>
            <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com" target="_self">Nous contacter</a></p>
        </footer>

        <script src="../js/script.js"></script>
        <script src="../js/burger.js"></script>
    </body>
</html>
