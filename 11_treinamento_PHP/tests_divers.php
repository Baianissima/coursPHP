<?php

    // Connection of BDD
    $pdoUNIV = new PDO('mysql:host=localhost;dbname=universite', 
    'root',
    // '',
    'root',// cette ligne commentée donne le mdp pour MAC avec MAMP
    array(
    PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ));


    debug($pdo);    
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Accueil</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <?php require 'link/header.php'?>
    <!-- fin container-fluid header  -->

    <div class="container-fluid bg-light">
        <nav class="my-2">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="annonces.php">Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajuter_annonce.php">Ajouter Annonce</a>
                </li>
            </ul>
        </nav>
      <section class="row">
        <div class="col-8">

            <?php
                $link = $pdoUNIV->query ( "SELECT * FROM advert ORDER BY id DESC" );
                $details = $link->rowCount();

                echo "<h4 class=\"alert alert-primary\">Il y a $details Annonces le plus récent</h4>";
                echo "<table class=\"table table-hover table-success table-striped\"><thead>
                <tr><th scope=\"col\">ID</th><th scope=\"col\">Title</th><th scope=\"col\">Zip_Code</th><th scope=\"col\">City</th><th scope=\"col\">Type</th><th scope=\"col\">Price</th><th scope=\"col\">Détails</th></tr></thead><tbody>";
                while($ligne=$link->fetch(PDO::FETCH_ASSOC)){
                echo "<tr><th scope=\"row\">".$ligne['id']."</th><td>".$ligne['title']."</td><td>".$ligne['zip_code']."</td><td>".$ligne['city']."</td><td>".$ligne['type']."</td><td>".$ligne['price']."</td><td><a href=\"details_annonces.php?details=$ligne[id]\" class=\"btn btn-success\">Détails</a></td></tr>";

                }
                echo "</tbody></table>";

               // <a href=\"details_annonces.php?details=$ligne[id]\" class=\"btn btn-success\">Détails</a>
            ?>

        </div>
        <!-- fin col -->

        <div class="col-4">
          <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
            <div class="card-header">Annonces</div>
            <div class="card-body">
            <?php
                $link = $pdoUNIV->query ( " SELECT * FROM advert ORDER BY id DESC LIMIT 1; " );
                $details = $link->rowCount();
                $display = $link->fetch(PDO::FETCH_ASSOC);

                echo "<h4 class=\"alert alert-warning\">Il y a $details Annonces le plus récent</h4>";
                echo "<h5 class=\"card-title alert alert-info\"> Title : " .$display['title']. "</h5>";
                echo "<p class=\"alert alert-success\"> City : ".$display['city']. ", Code postal : " .$display['zip_code']. " Price : ".$display['price']. "<p>";
                echo "<p class=\"alert alert-light\"> Description : ".$display['description']."<p>";
                
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
    <?php require 'link/footer.php'?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>