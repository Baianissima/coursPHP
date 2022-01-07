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

<!-- HTML pour le dossier PORTFOLIO - en mode Bootstrap -->
<!-- https://getbootstrap.com/docs/5.0/components/card/ -->

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
    <link rel="stylesheet" href="../vanusaPORTFOLIO/styles.css/style_portoflio.css">
</head>
<body>

   <!-- ===============-->
    <!-- Navbar fixed-top -->
    <!-- ===============-->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PORTFOLIO</a>
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

      <div>
        <img src="img/woman-pngrepo-com-fondcorail300.png" alt="image avatar féminin">
        <h1 class="display-6">Vous êtes à l'espace pro de Vanusa !</h1>

        <p>Je suis en formation de Développement/Intégration Web à l'Agence Colombbus</p>

        <p class="lead">
          <a href="#apropos" class="btn btn-sm btn-outline-light">En savoir plus</a>
        </p>
      </div>
      
      <blockquote class="mt-auto">
        <p class="lead">Carpe diem !</p>
      </blockquote>
    </div>
  </header>
    
    <!-- =========================== -->
    <!-- Conteneur principal -->
    <!-- =========================== -->
  <div class="container text-center col-12" id="portfolio">
    <!-- row 1 -->
    <section class="row justify-content-evenly align-items-center m-10">

      <h2>PORTFOLIO</h2>

      <div class= "card col-md-3" style="width: 18rem;">
        <img src="img/ReactTwitch.png" class="card-img-top" alt="image ReactTwitch">
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
        <img src="img/animation.jpg" class="card-img-top" alt="image animation">
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
        <img src="img/MeteoApp.png" class="card-img-top" alt="image MeteoApp">
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
    <section class="row justify-content-evenly align-items-center m-10">

      <div class="card col-md-3" style="width: 18rem;">
        <img src="img/SiteMenu.png" class="card-img-top" alt="image SiteMenu">
        <div class="card-body">
          <h5 class="card-title">Design Responsive</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="img/SiteResPic.jpg" class="card-img-top" alt="image site responsive">
        <div class="card-body">
          <h5 class="card-title">Site pour particulier</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="img/Visu.jpg" class="card-img-top" alt="image Visu">
        <div class="card-body">
          <h5 class="card-title">Visualisation de données</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>
    </section>
    <!-- fin row 2 -->
    
    <!-- row 3-->
    <section class="row justify-content-evenly align-items-center m-10">
      <div class= "card col-md-3" style="width: 18rem;">
        <img src="img/js.jpg" class="card-img-top" alt="image JS">
        <div class="card-body">
          <h5 class="card-title">Cloner Twitch avec React</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>
  
      <div class="card col-md-3" style="width: 18rem;">
        <img src="img/grid.jpg" class="card-img-top" alt="image grid">
        <div class="card-body">
          <h5 class="card-title">Ux Design</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, eligendi? Inventore eius fugiat tempora possimus, officia quam voluptate doloribus nesciunt sunt nemo sed! Repudiandae eum tempore sapiente officiis laboriosam accusamus!</p>
          <a href="#" class="btn btn-warning">Code source</a>
          <a href="#" class="btn btn-warning">Voir le projet</a>
        </div>
      </div>

      <div class="card col-md-3" style="width: 18rem;">
        <img src="img/bulma.jpg" class="card-img-top" alt="image bulma">
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
    <section class="row justify-content-evenly align-items-center mt-10" id="apropos">

      <h2>A PROPOS</h2>

      <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae accusamus non reprehenderit, placeat quam ducimus voluptatum ea quaerat. Eum voluptatem nulla reiciendis, veritatis sapiente excepturi commodi animi autem sequi iure.</p>
      </div>

      <div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae accusamus non reprehenderit, placeat quam ducimus voluptatum ea quaerat. Eum voluptatem nulla reiciendis, veritatis sapiente excepturi commodi animi autem sequi iure.</p>
      </div>    
    </section>
    <!-- fin row 4 -->

    <!-- row 5 -->
    <section class="row justify-content-evenly align-items-center mt-10" id="services">

      <h2>MES SERVICES</h2>

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
  <footer class="text-white" id="contact">

    <h4>Conctactez-moi</h4>
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </footer>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!-- Mes scripts JS en externe, ici pas besoin de async ni de defer, le script se charge en dernier et ne stoppe pas le chargement du HTML et du CSS  -->
    <!-- la solution la plus utilisée -->
    <script src="../js/mon_js.js"></script>
    <script src="script_portofolio.js"></script>
</body>
</html>