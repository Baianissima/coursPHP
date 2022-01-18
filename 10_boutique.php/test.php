
<?php 
//CONNEXION AU FICHIER INIT dans le dossier INC

require_once 'inc/init.inc.php';

require_once 'inc/navbar.inc.php';
// debug testé : ma var_dump apparait ;-)
// debug($_mavar);
?> 

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="styles.css" >


    <title>Test démarrage PHP dans le dossier Boutique</title>
  </head>

  <body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== -->

    <!-- fin containeur-fluid -->
    <header class="container-fluid f-header p-2 bg-white">
        <div class="col-12 text-center">
            <h1 class="display-4">MaBoutique</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-dark\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
     <main class="container mx-auto m-4 p-4 text-center bg-light">
        <section class="row">
            <div class="col-sm-12 border border-success">
                <?php
                    // Afficher les 4 produits avec SELECT * pour jeudi
                    $requete = $pdoMAB-> query(" SELECT * FROM produits ");
                    debug($requete);

                    $test = $requete->fetch( PDO::FETCH_ASSOC);
                    debug($test);
                    


                    // Afficher les 4 produits sur un tableau pour jeudi
                ?>
            </div>
        </section>
    </main>


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