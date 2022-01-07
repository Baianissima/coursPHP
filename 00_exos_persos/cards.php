<?php
 require_once '../inc/functions.php'; // appel des fonctions
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              AJOUTER LE HEAD EN REQUIRE              --> 
    <!-- ====================================================== -->

    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Exos persos</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->

    <!-- fin containeur-fluid -->
    <header class="container-fluid f-header p-2">
        <div class="col-12 text-center">
            <h1 class="display-4">Training : cards avec BS et PHP</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container col-12 mt-2 mb-2 p-2 m-auto text-center">
        <h2 class="p-4 mt-4">CARD IMAGES : bootstrap</h2>
            <h3 class="">Avec .card-img-top dans <code>img</code></h3>
            <h4 class="">Avec l'<code>img</code> à l'extérieur de .card-body</h4>
            <a class="mb-4 href="https://getbootstrap.com/docs/5.0/components/card/">Plus d'infos sur www.w3schools.com/bootstrap4/bootstrap_cards !</a>

        <section id=section-1 class="row justify-content-evenly align-items-center mt-4 mb-4">
            <div class="col-md-6">           
                <div class="card" style="width:18rem">
                <img class="card-img-top" src="../00_exos_persos/images/img_avatar5.png" alt="Card image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Marcela Teixeira</h5>
                        <p class="card-text">Professora de Ciências</p>
                        <a href="#" class="btn btn-success">Ver o CV</a>
                    </div>
                </div>
            </div>
            <!-- fin col -->

            <div class="col-md-6">                   
                <div class="card" style="width: 18rem">       
                    <div class="card-body text-center">
                        <h5 class="card-title">Vinicius Moreira</h5>
                        <p class="card-text">Estudante em Medicina</p>
                        <a href="#" class="btn btn-success">Ver o CV</a>
                    </div>
                    <img class="card-img-bottom" src="../00_exos_persos/images/img_avatar1.png" alt="Card image">
                </div>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row section 1 -->

        <section id=section-2 class="row justify-content-evenly align-items-center mt-4 mb-4">
            <h2 class="text-center mt-4 mb-4">CARD IMAGES : bootstrap</h2>
            <h3 class="text-center">Avec .card-img-bottom dans <code>img</code></h3>
            <h4 class="text-center">Avec l'<code>img</code> à l'intérieur de .card-body</h4>

            <div class="col-md-6">
                <div class="card" style="width:18rem">    
                    <div class="card-body text-center">
                    <img class="card-img-top" src="../00_exos_persos/images/img_avatar5.png" alt="Card image">
                        <h5 class="card-title">Marcela Teixeira</h5>
                        <p class="card-text">Professora de Ciências</p>
                        <a href="#" class="btn btn-success">Ver o CV</a>
                    </div>
                </div>
            </div>
            <!-- fin col -->

            <div class="col-md-6">                
                <div class="card" style="width: 18rem">       
                    <div class="card-body text-center">
                        <h5 class="card-title">Vinicius Moreira</h5>
                        <p class="card-text">Estudante em Medicina</p>
                        <a href="#" class="btn btn-success">Ver o CV</a>
                        <img class="card-img-bottom" src="../00_exos_persos/images/img_avatar1.png" alt="Card image">
                    </div>                 
                </div>
            </div>
            <!-- fin col -->       
        </section>
        <!-- fin row section 2 -->
        
        <section id=section-2 class="row mt-4 mb-4">
            <div class="col-md-6">
                <h2></h2>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row section 3 -->
    </div>
    <!-- fin div container -->
    
         
        
<!-- 
                // Et voilà ce que cela me donne:

                // Alors que moi je voudrais que les 3 premiers soit en haut ensuite ça saute une ligne puis ça en remet 3 ainsi de suite...

                // Est ce que quelqu'un peut m'aider ?

                // Victor

                // (Ma bdd est déjà rempli avec les textes du screen.)

                // Ici le passage php (mettre les balises php) :
                // $pdoBIB = new PDO( 'mysql:host=localhost;dbname=bibliotheque',// hôte et nom de la BDD
                // 'root',// le pseudo 
                // // '',// le mot de passe
                // 'root',// le mdp pour MAC avec MAMP
                // array(
                // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
                // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
                // ));
                // // debug(get_class_methods($pdoBIB));

                // // SELECT * FROM livre ORDER BY titre
                // $requete = $pdoBIB->query(" SELECT * FROM livre ORDER BY id_livre ");
                // $nbr_livres = $requete->rowCount();
                // debug($nbr_livres);
                // echo "<p>Il y a $nbr_livres livres dans la bibliothèque :</p>";
                
                // while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                // echo "<ul>";
                // echo "<li>Id : " .$ligne['id_livre']. " -  Auteur : " .$ligne['auteur']." - Titre : " .$ligne['titre']. "</li>";
                // echo "</ul>";
                // }
                // -->
           
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER EN REQUIRE                     --> 
    <!-- ====================================================== -->
    
    <footer>
        <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
        <?php require_once '../inc/footer.inc.php'; ?>
    </footer>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9Ah50zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>