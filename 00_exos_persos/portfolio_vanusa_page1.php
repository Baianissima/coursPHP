<!-- GABARIT pour APPEL DES FONCTIONS et CONNEXION BDD et TRAITEMENT FORMULAIRE -->

<?php
 // 1 - APPEL DES FONCTIONS
    // require_once '../inc/functions.php';

  
    // 2 - CONNEXION BDD : ici c'est la BDD DIALOGUE : remplacer DIA et DIALOGUE en fonction de la nouvelle BDD
    $pdoCONTACT = new PDO('mysql:host=localhost;dbname=contact',
                           'root',
                           // '',  // mdp pour PC a decomenter si travail sur PC
                           'root', // mdp pour MAC a decomenter si travail sur MAC
                           array(
                               PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                               PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
                           ));
                           // debug($pdoDIA);
                           // debug(get_class_methods($pdoDIA));
   
   // Ici une demo seulement : TRAITEMENT DU FORMULAIRE (version basique, et c'est la version non sécurisée)
   //  if ( !empty( $_POST )) {
   //     //  debug($_POST);
   //     $insertion = $pdoDIA->query( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES ( '$_POST[pseudo]', '$_POST[message]', NOW()  ) ");
   //  }


// 3 - TRAITEMENT DU FORMULAIRE
 if ( !empty( $_POST )) {  // Ici on lit : "Si $_POST n'est pas vide..."
    $_POST['nom'] = htmlspecialchars($_POST['nom']); // pour se prémunir des failles et des injections SQL
    $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
    $_POST['adresse'] = htmlspecialchars($_POST['prenom']);
    $_POST['code_postal'] = htmlspecialchars($_POST['adresse']);
    $_POST['ville'] = htmlspecialchars($_POST['ville']);
    $_POST['telephone'] = htmlspecialchars($_POST['telephone']);
    $_POST['message'] = htmlspecialchars($_POST['message']);

    // $insertion = $pdoCONTACT->prepare( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES (:pseudo, :message, NOW()) ");

    $insertion->execute( array(
        ':nom'=> $_POST['nom'],
        ':message' => $_POST['message'],

    ));
 }
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio en Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <!-- Mes styles -->
    <link rel="stylesheet" href="styles_portfolio_vanusa.css">
</head>
<body>

   <!-- ===============-->
    <!-- Navbar fixed-top -->
    <!-- ===============-->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PORTFOLIO</a>
        <img src="" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#apropos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <span class="navbar-text">
            Bienvenue !
          </span>
        </div>
      </div>
    </nav>

    <!-- =========================== -->
    <!-- Accueil -->
    <!-- =========================== -->

  <header>
    <div class="d-flex flex-column align-items-center p-5 text-center bg-dark text-white mx-auto" id="accueil">

      <div class="mt-4">
        <img src="images/woman-pngrepo-com-fondcorail300.png" alt="image avatar féminin">
        <h1 class="display-6">Portfolio en php - page 1</h1>

        <!-- <p>Formatrice et traductrice en quête de nouvelles compétences dans le numérique, <br>
          je suis une formation de Développement/Intégration Web à Colombbus, Agence Suresnes
        </p> -->

        <p>Cette page est un exo en 2 parties : page 1 sera l'accueil avec le form a remplir, et la page 2 servira para lister les informations de la bdd Contact</p>

        <blockquote class="mt-auto">
          <!-- <p class="lead">Bienvenue à l'espace pro de Vanusa </p> -->
        </blockquote>

        <p class="lead">
          <a href="portfolio_vanusa_page2.php" class="btn btn-sm btn-outline-light">Cliquer ici pour aller à la page 2 !</a>
        </p>
      </div>
      
     
    </div>
  </header>
    
    <!-- =========================== -->
    <!-- Conteneur principal -->
    <!-- =========================== -->
  <div class="container text-center col-12" id="portfolio">
    <!-- row 1 -->
    <section class="row justify-content-evenly align-items-center mb-4">

      <h2 class="pt-4">PORTFOLIO</h2>

      <div class= "card col-md-3" style="width: 18rem;">
        <img src="images/ReactTwitch.png" class="card-img-top" alt="image ReactTwitch">
        <div class="card-body">
          <h5 class="card-title">Cloner Twitch avec React</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <div>
            <a href="#" class="btn btn-warning">Code source</a>
            <a href="#" class="btn btn-warning">Voir le projet</a>
          </div>
        </div>
      </div>
  
      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/animation.jpg" class="card-img-top" alt="image animation">
        <div class="card-body">
          <h5 class="card-title">Ux Design</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <div>
            <a href="#" class="btn btn-warning">Code source</a>
            <a href="#" class="btn btn-warning">Voir le projet</a>
          </div>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/MeteoApp.png" class="card-img-top" alt="image MeteoApp">
        <div class="card-body">
          <h5 class="card-title">Application Méteo</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <div>
            <a href="#" class="btn btn-warning">Code source</a>
            <a href="#" class="btn btn-warning">Voir le projet</a>
          </div>
        </div>
      </div>
    </section>
    <!-- fin row 1 -->
        
     <!-- row 2 -->
    <section class="row justify-content-evenly align-items-center mb-4">

      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/SiteMenu.png" class="card-img-top" alt="image SiteMenu">
        <div class="card-body">
          <h5 class="card-title">Design Responsive</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/SiteResPic.jpg" class="card-img-top" alt="image site responsive">
        <div class="card-body">
          <h5 class="card-title">Site pour particulier</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/Visu.jpg" class="card-img-top" alt="image Visu">
        <div class="card-body">
          <h5 class="card-title">Visualisation de données</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>
    </section>
    <!-- fin row 2 -->
    
    <!-- row 3 -->
    <section class="row justify-content-evenly align-items-center mb-4">
      <div class= "card col-md-3" style="width: 18rem;">
        <img src="images/js.jpg" class="card-img-top" alt="image JS">
        <div class="card-body">
          <h5 class="card-title">Cloner Twitch avec React</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>
  
      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/grid.jpg" class="card-img-top" alt="image grid">
        <div class="card-body">
          <h5 class="card-title">Ux Design</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="images/bulma.jpg" class="card-img-top" alt="image bulma">
        <div class="card-body">
          <h5 class="card-title">Application Méteo</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>
    </section>
    <!-- fin row 3 -->
          
    <!-- row 4 -->
    <section class="section-2 row justify-content-evenly align-items-center mt-4" id="apropos">

      <h2 class="pt-4">A PROPOS</h2>

      <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae accusamus non reprehenderit, placeat quam ducimus voluptatum ea quaerat. Eum voluptatem nulla reiciendis, veritatis sapiente excepturi commodi animi autem sequi iure.</p>
      </div>

      <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae accusamus non reprehenderit, placeat quam ducimus voluptatum ea quaerat. Eum voluptatem nulla reiciendis, veritatis sapiente excepturi commodi animi autem sequi iure.</p>
      </div>    
    </section>
    <!-- fin row 4 -->

    <!-- row 5 -->
    <section class="section-3 row justify-content-evenly align-items-center mt-4" id="services">

      <h2 class="pt-4">MES SERVICES</h2>

      <div class="col-md-3">
        <article>
          <h6>Vue</h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore optio sed obcaecati ex hic repudiandae quaerat veniam explicabo quas sapiente aliquam non quo vel illo odio, neque, dignissimos libero veritatis?</p>
        </article>
      </div>

      <div class="col-md-3">
        <article>
          <h6>Angular</h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore optio sed obcaecati ex hic repudiandae quaerat veniam explicabo quas sapiente aliquam non quo vel illo odio, neque, dignissimos libero veritatis?</p>
        </article>
      </div>

      <div class="col-md-3">
        <article>
          <h6>React</h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore optio sed obcaecati ex hic repudiandae quaerat veniam explicabo quas sapiente aliquam non quo vel illo odio, neque, dignissimos libero veritatis?</p>
        </article>
      </div>   
    </section>
    <!-- fin row 5 -->

  <!-- fin div containeur -->
  </div>

  <!-- pied de page -->
  <footer class="row container-fluid align-items-center p-5 text-center bg-dark text-white mx-auto" id="contact">
    <h4 class="text-center">Contactez-moi</h4>

    <div class="col-md-6">
      
    <form action="portfolio_vanusa_page2.php" method="POST">

        <div class="mb-3 col-12">
          <div class="col-4">
            <label for="nom" name="nom" required class="form-label">Nom</label>
            <input type="text" class="form-control" id="prenom" aria-describedby="nomlHelp">
          </div>
          
          <div class="col-4">
            <label for="prenom" name="prenom" required class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" aria-describedby="prenomlHelp">
        </div>
      
          
        </div>

        

        <div class="mb-3 ">
          <label for="adresse" name="adresse" class="form-label">Adresse</label>
          <input type="text" class="form-control" id="adresse" aria-describedby="adresselHelp">
        </div>

        <div class="mb-3 ">
          <label for="code_postal" name="code_postal" required class="form-label">Code postal</label>
          <input type="number" class="form-control" id="code_postal" aria-describedby="code_postalHelp">
        </div>

        <div class="mb-3 ">
          <label for="ville" name="ville" required class="form-label">Ville</label>
          <input type="text" class="form-control" id="ville" aria-describedby="villeHelp">
        </div>

        <div class="mb-3 ">
          <label for="email" name="email"  required class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3 ">
          <label for="telephone" name="telephone" required class="form-label">Votre adresse e-mail</label>
          <input type="telephone" class="form-control" id="telephone" aria-describedby="telephoneHelp">

          <div id="emailHelp" class="form-text">J'utiliserai vos informations personnelles exclusivement pour vous contacter !</div>
        </div>

        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        
        <button type="submit" class="btn btn-success">Envoyer</button>
      </form>
    </div>
    <!-- fin col -->

    <div class="col-md-4 w-25">
        <img src="images/email-6370595_640.jpeg" alt="photo de mails envoyés">
    </div>
    <!-- fin col -->
  </footer>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!-- Mes scripts JS en externe, ici pas besoin de async ni de defer, le script se charge en dernier et ne stoppe pas le chargement du HTML et du CSS  -->
    <!-- la solution la plus utilisée -->
    <!-- <script src="../js/mon_js.js"></script> -->
    <!-- <script src="script_portfolio.js"></script> -->
</body>
</html>