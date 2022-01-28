
<?php 
// POUR SE CONNECTER ET SE DECONNECTER :

// (CONNEXION AU FICHIER INIT dans le dossier INC)
require_once 'inc/init.inc.php';

// debug($_SESSION);

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="css/styles.css" >

    <title>La boutique - Connectez-vous</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once 'inc/navbar.inc.php';
    ?> 
  
    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
                <a class="navbar-brand" href="accueil.php"><h1 class="display-4" style="color: rgba(132, 113, 122, 0.8);">Bienvenue à MyBoutique !</h1></a>
            <p class="lead"></p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
                <?php
                    // $positiva = "Tudo joia!";
                    // echo "<p class=\"text-dark\">$positiva</p>";
                ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
<main class="container">
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h2 class="fw-light">Que souhaitez-vous faire ?</h2>
        <p class="lead text-muted"></p>
        <p>
          <a href="connexion.php" class="btn btn-secondary my-2">Connexion</a>
          <a href="inscription.php" class="btn btn-secondary my-2">Inscription</a>
          <a href="inscription.php" class="btn btn-secondary my-2">Shopping</a>
        </p>
      </div>
    </div>
  </section>
  <!--  fin section -->

  <div class="album py-5 bg-light">

    <!-- debut des cardas de la galerie produits -->
    <div class="galerie">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">

      <!-- debut des col -->
        <div class="col">
          <div class="card shadow-sm m-4 p-4">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <img src="photos/pull1.jpeg" alt="photo pull 1">

            <div class="card-body">
              <p class="card-text">Pull blanc en lin de coton</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choissez votre taille</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="3">XL</option>
                    <option value="3">XXL</option>
                  </select>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <!-- fin col - card pull 1 -->

        <div class="col">
          <div class="card shadow-sm m-4 p-4">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <img src="photos/pantalon1.jpeg" alt="photo pantalon 1">

            <div class="card-body">
              <p class="card-text">Jeans bootcut brut</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choissez votre taille</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="3">XL</option>
                    <option value="3">XXL</option>
                  </select>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <!-- fin col - card pantalon 1 -->

        <div class="col">
          <div class="card shadow-sm m-4 p-4">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <img src="photos/pantalon2.jpeg" alt="photo pantalon 2">

            <div class="card-body">
              <p class="card-text">Pantalon en stretch blanc</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choissez votre taille</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="3">XL</option>
                    <option value="3">XXL</option>
                  </select>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <!-- fin col - card pull 2 -->

        
        <div class="col">
          <div class="card shadow-sm m-4 p-4">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <img src="photos/pull2.jpeg" alt="photo pull 2">

            <div class="card-body">
              <p class="card-text">Pantalon 2</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choissez votre taille</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="3">XL</option>
                    <option value="3">XXL</option>
                  </select>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <!-- fin col - card pantalon 2 -->

        <div class="col">
          <div class="card shadow-sm m-4 p-4">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <img src="photos/pull1.jpeg" alt="photo pull 1">

            <div class="card-body">
              <p class="card-text">Pull blanc en lin de coton</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choissez votre taille</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="3">XL</option>
                    <option value="3">XXL</option>
                  </select>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <!-- fin col - card doublon à completer -->

        <div class="col">
          <div class="card shadow-sm m-4 p-4">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <img src="photos/pull1.jpeg" alt="photo pull 1">

            <div class="card-body">
              <p class="card-text">Pull blanc en lin de coton</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Détails</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Choissez votre taille</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="3">XL</option>
                    <option value="3">XXL</option>
                  </select>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <!-- fin col - card doublon à completer -->
      </div>
      <!-- fin div row -->
    </div>
    <!-- fin container -->
  </div>

  <!-- debut section pour la récetion de la requête : test connexion base de données -->
  <section>

    <?php 
      $requete = $pdoMAB->query( " SELECT * FROM produits ORDER BY id_produit" );
      // debug($resultat);
      $pdt = $requete->rowCount();
      // debug($nbr_commentaires);
    ?>
    <h4>Il y a <?php echo $pdt; ?> produits en ligne !</h4>
          <table class="table table-striped">
             <thead>
               <tr>
                 <th>titre</th>
                 <th>categorie</th>
                 <th>taille</th>
                 <th>stock</th>
                 <th>couleurs</th>
               </tr>
             </thead>
             <tbody>
                <!-- ouverture de la boucle while -->
                  <?php while ( $ligne = $requete->fetch( PDO::FETCH_ASSOC )) { ?>
                <tr>
                  <td><?php echo $ligne['titre']; ?></td>                   
                  <td><?php echo $ligne['categorie']. ' ' .$ligne['stock']; ?></td>
                  <td><?php echo $ligne['taille']; ?></td>
                  <td><?php echo $ligne['stock']; ?></td>
                  <td><?php echo $ligne['couleur']; ?></td>
                </tr>
                <!-- fermeture de la boucle -->
                <?php } ?>
             </tbody>
            </table>
            <!-- fin -->
          </div>
          <!-- fin col -->
      </section> -->
    <!-- fin row -->
  </main>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  
    <?php require_once 'inc/footer.inc.php';?> 

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>