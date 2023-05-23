<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GIFTY - Accueil</title>
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../stylesheet/partenaire.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../javascript/acces.js"></script>

</head>

<body>

    <?php include('connexion_base.php') ?>
    <?php
    session_start();

    $partenaireSport = $bdd->query("SELECT prenom, domaine FROM Users WHERE statut = '3' AND domaine = '1';");
    $partenaireMultimedia = $bdd->query("SELECT prenom, domaine FROM Users WHERE statut = '3' AND domaine = '2';");
    $partenaireInterieur = $bdd->query("SELECT prenom, domaine FROM Users WHERE statut = '3' AND domaine = '3';");
    $partenaireSensation = $bdd->query("SELECT prenom, domaine FROM Users WHERE statut = '3' AND domaine = '4';");
    $partenaireMode = $bdd->query("SELECT prenom, domaine FROM Users WHERE statut = '3' AND domaine = '5';");

    ?>

    <?php include('menu.php') ?>
    <div class="partenaire">
        <h1>Nos Partenaires</h1>
        <section id="nouveaute">
            <h2>Nouveauté</h2>
            <div class="bandeauNouv">
                <div class="slideNouv">
                    <div class="boxImgNouv"><img src="" alt="">image</div>
                    <div class="nomBoxNouv">Netflix</div>
                </div>
                <div class="slideNouv">
                    <div class="boxImgNouv"><img src="" alt="">image</div>
                    <div class="nomBoxNouv">Ami</div>
                </div>
                <div class="slideNouv">
                    <div class="boxImgNouv"><img src="" alt="">image</div>
                    <div class="nomBoxNouv">apple</div>
                </div>
            </div>
        </section>
        <section id="sport" class="secPartenaire">
            <h3 class="textSec">Sport</h3>
            <div class="bandeau">
                <button class="boutonGauche" onclick="turn(1)"></button>
                <button class="boutonDroite" onclick="turn(2)"></button>
                <div class="boxSlider">
                    <div class="slider" id="sliderSport">
                        <?php
                        while ($donneeSport = $partenaireSport->fetch()) {
                            ?>
                            <div class="slide">
                                <div class="boxImg"><img src="" alt="">1</div>
                                <div class="nomBox">
                                    <?php echo $donneeSport['prenom']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="mode" class="secPartenaire">
            <h3 class="textSec">Multimédia</h3>
            <div class="bandeau">
                <div class="boutonGauche"></div>
                <div class="boutonDroite"></div>
                <div class="boxSlider">
                    <div class="slider" id="sliderMode">
                        <?php
                        while ($donneeMode = $partenaireMode->fetch()) {
                            ?>
                            <div class="slide">
                                <div class="boxImg"><img src="" alt="">1</div>
                                <div class="nomBox">
                                    <?php echo $donneeMode['prenom']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="multimedia" class="secPartenaire">
            <h3 class="textSec">Multimédia</h3>
            <div class="bandeau">
                <div class="boutonGauche"></div>
                <div class="boutonDroite"></div>
                <div class="boxSlider">
                    <div class="slider">
                        <?php
                        while ($donneeMultimedia = $partenaireMultimedia->fetch()) {
                            ?>
                            <div class="slide">
                                <div class="boxImg"><img src="" alt="">1</div>
                                <div class="nomBox">
                                    <?php echo $donneeMultimedia['prenom']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="interieur" class="secPartenaire">
            <h3 class="textSec">Intérieur</h3>
            <div class="bandeau">
                <div class="boutonGauche"></div>
                <div class="boutonDroite"></div>
                <div class="boxSlider">
                    <div class="slider">
                        <?php
                        while ($donneeInterieur = $partenaireInterieur->fetch()) {
                            ?>
                            <div class="slide">
                                <div class="boxImg"><img src="" alt="">1</div>
                                <div class="nomBox">
                                    <?php echo $donneeInterieur['prenom']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="sensation" class="secPartenaire">
            <h3 class="textSec">Sensation</h3>
            <div class="bandeau">
                <div class="boutonGauche"></div>
                <div class="boutonDroite"></div>
                <div class="boxSlider">
                    <div class="slider">
                        <?php
                        while ($donneeSensation = $partenaireSensation->fetch()) {
                            ?>
                            <div class="slide">
                                <div class="boxImg"><img src="" alt="">1</div>
                                <div class="nomBox">
                                    <?php echo $donneeSensation['prenom']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include('footer.php') ?>
    <script src="../javascript/partenaire.js"></script>
    <script src="../javascript/menu.js"></script>
</body>

</html>