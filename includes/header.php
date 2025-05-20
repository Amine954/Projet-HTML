<header>
    <nav>
        <div id="listemenubar">
            <ul class="listemenu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="recherche.php">Recherche</a></li>
                <li>
                    <a href="<?php echo (isset($_SESSION['statut']) && ($_SESSION['statut'] === 'connecte_admin' || $_SESSION['statut'] === 'connecte_client')) ? 'panier.php' : 'connexion.php'; ?>">
                        Panier
                    </a>
                </li>
                <?php if (isset($_SESSION['statut']) && $_SESSION['statut'] === 'connecte_admin'): ?>
                    <li><a href="administrateur.php">Administration</a></li>
                <?php endif; ?>
            </ul>
        </div>
        
        <div id="boutonmenubar">
            <button class="boutonmenu" id="theme-selector">🌙</button>
            <?php if (isset($_SESSION['statut']) && ($_SESSION['statut'] === 'connecte_admin' || $_SESSION['statut'] === 'connecte_client')): ?>
                <button class="boutonmenu"><a href="profil.php">Profil</a></button>
                <button class="boutonmenu" id="deconnexion"><a href="deconnexion.php">Déconnexion</a></button>
            <?php else: ?>
                <button class="boutonmenu"><a href="inscription.php">Inscription</a></button>
                <button class="boutonmenu"><a href="connexion.php">Connexion</a></button>
            <?php endif; ?>
            
        </div>
    </nav>
</header>