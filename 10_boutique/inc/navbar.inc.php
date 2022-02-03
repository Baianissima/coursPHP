    
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-muted">
    <!-- ICI LA NAV FORMAT BURGUER : <nav class="navbar navbar-light bg-light text-muted"> -->
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="accueil.php">
                    <img src="img/logo_rond_beige.png" class="m-4" alt="logo de MyBoutique" width="70" height="70">
                </a>
                <a class="navbar-brand" style="color: rgba(132, 113, 122, 0.8);" href="accueil.php">MyBOUTIQUE</a>
            </div>
            
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav">
                     <li class="nav-item m-4">
                        <!-- <a class="nav-link" href="<?= URL ?>accueil.php"></a> -->
                        <p class="">Bonjour, <?php echo $_SESSION['membre'] ['prenom'];?></p>
                        <a class="nav-link" href=""></a>
                    </li>
                
                    <li class="nav-item m-4">
                        <!-- <a class="nav-link" href="<?= URL ?>accueil.php"></a> -->
                        <a class="nav-link" href="accueil.php"></a>
                    </li>
                    <li class="nav-item m-4">
                        <a class="nav-link" style="color: rgba(132, 113, 122, 0.8);" href="inscription.php">Nouveau ici ? Inscrivez-vous !</a>
                    </li>
                    <li class="nav-item m-4">
                        <a class="nav-link" style="color: rgba(132, 113, 122, 0.8);" href="connexion.php">Connectez-vous</a>
                    </li>

                    <li class="nav-item m-4">
                        <a class="nav-link" style="color: rgba(132, 113, 122, 0.8);" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item m-4">
                        <a class="nav-link" style="color: rgba(132, 113, 122, 0.8);" href="admin/accueil_admin.php">Accueil Admin</a>
                    </li>
                    <li class="nav-item m-4">
                        <a class="nav-link" style="color: rgba(132, 113, 122, 0.8);" href="panier.php"><i class="bi bi-bag"></i></a>
                    </li>
                </ul>
            </div>
            </div>
            
        </div>
    </nav>