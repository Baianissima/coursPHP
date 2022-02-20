<?php
require_once '../inc/functions.php'; // APPEL DES FONCTIONS

$pdoBTQ = new PDO('mysql:host=localhost;dbname=maboutique','root', '', 
          array(
            PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
          ));
  //jeVar_dump($pdoBTQ);
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP-Mabutique</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/myStyle.css">

  </head>
  <body>
    <header class="container bg-dark text-white text-center">
      <h1 class="display-4 fw-bold">CoursPHP - Mabutique</h1>
      <p class="lead">Products page</p>
      <?php require '../inc/navbar.inc.php'; ?> 
    </header>
    
    <!-- fin container-fluid header  -->

    <div class="container bg-white">
      <section class="row">
        <div class="col-10 mx-auto">
          <h2>Products Details</h2>
          <div class="card text-white bg-success mb-3">
            <div class="card-header">Annonces</div>
            <div class="card-body">
                <?php
                //SELECT `id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock` FROM `produits` WHERE 1
                    if (isset($_GET['details'])) { // On demande le détail d'un announce
                        $link = $pdoBTQ->prepare( " SELECT * FROM produits WHERE id_produit = :details " );
                        $link->execute(array(
                          ':details' => $_GET['details'] 
                        ));
                    }
                    $display = $link->fetch(PDO::FETCH_ASSOC);

                    echo "<h4 class=\"alert alert-warning\">Voici les détails de votre Product</h4>";
                    echo "<h5 class=\"card-title alert alert-info\"> ID : " .$display['id_produit'].", Ref no : " .$display['reference']. "</h5>";
                    echo "<p class=\"alert alert-success\"> Categorie : ".$display['categorie']. ", Couleur : " .$display['couleur']. " Price : ".$display['prix']. " Titre : ".$display['titre']. " Taille : ".$display['taille']. "<p>";
                    echo "<p class=\"alert alert-light\"> Description : ".$display['description']. " Description : " .$display['photo']."<p>";
                    echo "<img src=\"$display[photo]\" class=\"img-fluid\" alt=\"Logo\">";
              ?>
              <a href="maboutique.php" class="btn btn-warning">Retourner à la Annonces</a>
              <?php
              echo "<a href=\"reserve_annonces.php?reserve=$display[id_produit]\" class=\"btn btn-info\">Reserver la Annonces</a>";
              ?>
              
            </div>
          </div>
        </div>
        <!-- fin col -->
      </section>
      <!-- fin row -->

    </div>
    <!-- fin container  -->

	
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>