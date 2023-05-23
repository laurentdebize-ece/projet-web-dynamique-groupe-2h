<header>
    <nav class="navbar">
        <a href="#" class="logo">Gifty</a>
        <ul class="nav-links">
            <li><a href="accueil.php" class="active">Accueil</a></li>
            <li><a href="omnesbox.php">J'ai une OmnesBox</a></li>
            <li><a href="partenaires.php">Partenaires</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
        </ul>

        <ul class="nav-icons">
            <li>
                <form action="" method="get" class="search-form">
                    <input type="search" placeholder="Rechercher" name="query" class="search-input">
                    <div class="search-button">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="search-button">
                        <i class="fa fa-close"></i>
                    </div>
                </form>
            </li>
            <li id="account-button"><img src="../assets/account.svg" alt="Mon compte" id="compte_img"></li>
            <li><img src="../assets/cart.svg" alt="Mon panier"></li>
        </ul>
        <div class="login-popup">
            <a href="login.php">
                Connexion
                <div class="arrow"></div>
            </a>
            <div class="separator"></div>
            <a href="creation_de_compte.php">
                Inscription
                <div class="arrow"></div>
            </a>
        </div>
    </nav>
</header>
<script src="../javascript/menu.js"></script>