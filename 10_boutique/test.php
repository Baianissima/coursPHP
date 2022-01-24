
<?php 
//CONNEXION AU FICHIER INIT dans le dossier INC

require_once 'inc/init.inc.php';

require_once 'inc/navbar.inc.php';
// debug testé : ma var_dump apparait ;-)
// debug($_mavar);
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="styles.css" >

    <title>Démarrage dossier boutique</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== -->
    <header class="container-fluid f-header p-2 bg-white">
        <div class="col-12 text-center">
            <h1 class="display-4">My Boutique</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Tudo joia!";
                echo "<p class=\"text-dark\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container mx-auto m-4 p-4 text-center bg-light">
        <section class="row">
            <div class="col-md-12">
                <?php
                    // Afficher les 4 produits avec SELECT * pour jeudi
                    
                    $requete = $pdoMAB-> query(" SELECT * FROM produits ORDER BY categorie");
                    debug($requete);

                    $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                    debug($ligne);

                    // echo "<p class=\"alert alert-info\"> Reference : " .$ligne['reference']. " - Categorie : ".$ligne['categorie']. " - Id : " .$ligne['id_produit']. " </p>";
                    
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-10 mx-auto m-4">
                <h2 class="m-4 p-4 text-center">Tableau en PHP des produits :</h2>
    
                <?php 
                    echo "<table class=\"table table-sm table-info table-striped\">";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>Photos</th>";
                                echo "<th>Ref</th>";
                                echo "<th>Titre</th>";
                                echo "<th>Catégorie</th>";
                                echo "<th>Description</th>";
                                echo "<th>Couleur</th>";
                                echo "<th>Taille</th>";
                                echo "<th>Public</th>";
                                echo "<th>Prix</th>";
                            echo "</tr>";
                        echo "</thead>";

                    foreach ( $pdoMAB->query( " SELECT * FROM produits " ) as $infos ) {
                        echo "<tbody>";
                            echo "<tr>";
                                echo "<td><img src=['photo']></td>";
                                echo "<td>" .$infos['reference']." </td>"; 
                                echo "<td>" .$infos['titre']." </td>"; 
                                echo "<td>" .$infos['categorie']." </td>"; 
                                echo "<td>" .$infos['description']." </td>";
                                echo "<td>" .$infos['couleur']." </td>";
                                echo "<td>" .$infos['taille']." </td>"; 
                                echo "<td>" .$infos['public']." </td>"; 
                                echo "<td>" .$infos['prix']." </td>"; 
                            echo "</tr>";
                        echo "</tbody>";
                    }
                    echo "</table>";

                // debug($infos['photo']);
                ?> 
            </div>
            <!-- fin col -->
        </section
        ><!-- fin row -->
    </main>
    <!-- fin container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  
    <footer>
        <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
        <!-- passage php avec : require_once 'inc/footer.inc.php'; -->
        <?php require_once 'inc/footer.inc.php'; ?>
    </footer>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>