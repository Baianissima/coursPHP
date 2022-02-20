    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- ICI LA NAV FORMAT BURGUER : <nav class="navbar navbar-light bg-light text-muted"> -->
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="accueil.php"><img src="img/aquarela-azul.jpeg" class="m-4" alt="logo" width="70" height="70">University</a>
                <!-- style="color: rgba(132, 113, 122, 0.8);" -->
            </div>
            
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item m-4">
                        <!-- <a class="nav-link" href="<?= URL ?>accueil.php"></a> -->
                        <!-- <p class="my-3">Bonjour, <?php echo $_SESSION['etudiant'] ['prenom'];?></p>
                        <a class="nav-link" href=""></a>
                    </li> -->
                
                    <li class="nav-item m-4">
                        <!-- <a class="nav-link" href="<?= URL ?>accueil.php"></a> -->
                        <a class="nav-link" href="bdd.php">Bdd</a>
                    </li>

                    <li class="nav-item m-4">
                        <a class="nav-link" href="2_affichage_insertion.php">Affichage/Insertion</a>
                    </li>

                    <li class="nav-item m-4">
                        <a class="nav-link" href="3_maj.php">Maj back office </a>
                    </li>

                    <!-- <li class="nav-item m-4">
                        <a class="nav-link" href="update.php">Update</a>
                    </li> -->

                    <!-- <li class="nav-item m-4">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>

                    <li class="nav-item m-4">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li> -->

                    <!-- <li class="nav-item m-4">
                        <a class="nav-link" href="admin/accueil_admin.php">Admin</a>
                    </li>
                     -->
                    <li class="nav-item m-4">
                        <a class="nav-link" href="panier.php"><i class="bi bi-book"></i></a>
                    </li>
                </ul>
            </div>     
        </div>
    </nav>