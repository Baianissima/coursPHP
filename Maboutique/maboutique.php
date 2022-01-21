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
          <h2>Products Table</h2>

          <?php
          //SELECT `id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock` FROM `produits` WHERE 1
            
            $bddlink = $pdoBTQ->query ( " SELECT * FROM produits " );
                $product = $bddlink->rowCount();

                echo "<h4 class=\"alert alert-primary\">Il y a $product Annonces le plus récent</h4>";
                echo "<table class=\"table table-hover table-success table-striped\"><thead>
                <tr><th scope=\"col\">Product-ID</th><th scope=\"col\">Reference</th><th scope=\"col\">Categorie</th><th scope=\"col\">Titre</th><th scope=\"col\">Description</th><th scope=\"col\">Couleur</th><th scope=\"col\">Taille</th><th scope=\"col\">Public</th><th scope=\"col\">Photo</th><th scope=\"col\">Price</th><th scope=\"col\">Stock</th><th scope=\"col\">Détails</th></tr></thead><tbody>";
                while($pdlink=$bddlink->fetch(PDO::FETCH_ASSOC)){
                echo "<tr><th scope=\"row\">".$pdlink['id_produit']."</th><td>".$pdlink['reference']."</td><td>".$pdlink['categorie']."</td><td>".$pdlink['titre']."</td><td>".$pdlink['description']."</td><td>".$pdlink['couleur']."</td><td>".$pdlink['taille']."</td><td>".$pdlink['public']."</td><td>".$pdlink['photo']."</td><td>".$pdlink['prix']."</td><td>".$pdlink['stock']."</td><td><a href=\"pdtDetails.php?details=$pdlink[id_produit]\" class=\"btn btn-warning\">Details</a></td></tr>";

                }
                echo "</tbody></table>";

          ?>

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