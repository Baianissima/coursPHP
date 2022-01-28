
<?php 
// POUR SE CONNECTER ET SE DECONNECTER :

// (CONNEXION AU FICHIER INIT dans le dossier INC)
require_once 'inc/init.inc.php';

// debug($_SESSION);

?> 

<?php 
// connexion au fichier init 
require_once 'inc/init.inc.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Ma boutique  </title>

</head>
<body>

<!-- =================================== -->
<!-- navbar -->
<!-- =================================== -->
<nav class="navbar sticky-top navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand" href="test.php">
      <img src="photos/logo.jpg" alt="" width="30" height="24">
    </a>
    <ul class="nav justify-content-center">

    <li class="nav-item">
    <a class="nav-link active" href="inscription.php" >Inscris-toi  !</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="connexion.php">Me connecter</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="profil.php">Mon profil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="panier.php">Mon panier</a>
  </li>

</ul>
  </div>
  
</nav>




    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-danger">
        <div class="col-12 text-center">
            <h1 class="display-4">Ma boutique  </h1>
            <img src="photos/logo.jpg" alt="logo">
        </div>

    </header>

    <!-- fin container header -->
    <div class="container mb-4 bg-white">

<section class="row">
    <!-- col -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
    
    <div class="card1" style="width: 18rem;">
      <img src="photos/pull1.jpg" class="card-img-top" alt="pull1">
      <div class="card-body text-center">
        <h5 class="card-title">Pull gris</h5>
    
      </div>
</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Prix</li>
    <li class="list-group-item">50 €</li>
  </ul>
  <div class="card-body">
  <a href="test.php" class="btn btn-secondary">Achat rapide</a>

  </div>
  <!-- fin card body -->
</div>
<!-- fin col -->

<div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
    
    <div class="card2" style="width: 18rem;">
      <img src="photos/pull2.jpg" class="card-img-top" alt="pull2">
      <div class="card-body text-center">
        <h5 class="card-title">Pull white</h5>
    
      
      </div>
</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Prix</li>
    <li class="list-group-item">39 €</li>
  </ul>
  <div class="card-body">
  <a href="test.php" class="btn btn-secondary">Achat rapide</a>

  </div>
  <!-- fin card body -->
</div>
<!-- fin col -->

</section>
<section class="row">
    <!-- col -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
    
    <div class="card3" style="width: 18rem;">
      <img src="photos/pantalon1.jpg" class="card-img-top" alt="pantalon1">
      <div class="card-body text-center">
        <h5 class="card-title">Pantalon blanc</h5>
      
      </div>
</div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Prix</li>
    <li class="list-group-item">50 €</li>
  </ul>
  <div class="card-body">
  <a href="test.php" class="btn btn-secondary">Achat rapide</a>

  </div>
  <!-- fin card body -->
</div>
<!-- fin col -->


<div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
    
<!-- card 2 -->
    <div class="card4" style="width: 18rem;">
      <img src="photos/pantalon2.jpg" class="card-img-top" alt="pantalon2">
      <div class="card-body text-center">
        <h5 class="card-title">Pantalon</h5>
      
      </div>
</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Prix :</li>
    <li class="list-group-item">39 €</li>
  </ul>
  <div class="card-body">
  <a href="test.php" class="btn btn-secondary">Achat rapide</a>

  </div>
  <!-- fin card body -->
</div>
<!-- fin col -->

</section>
      
       <?php 
             $requete = $pdoMAB->query( " SELECT * FROM produits ORDER BY id_produit" );
             // debug($resultat);
             $pdt = $requete->rowCount();
             // debug($nbr_commentaires);
       ?>
            <h5>Il y a <?php echo $pdt; ?> produits en ligne  </h5>

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
          </div>
          <!-- fin col -->
               </section> -->
<!-- fin row -->
    </div>
    <!-- fin div container -->
 <!-- Footer -->
 <footer class="bg-danger text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Rejoins-nous pour recevoir les nouveautés</strong>
            </p>
          </div>
          <!--Grid column-->

  

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <a href="inscription.php" class="btn btn-outline-light mb-4">Inscris-toi!
            </a>

          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

   
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://www.linkedin.com/in/fatima-chine/">Chine Fatima- Colombbus</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>