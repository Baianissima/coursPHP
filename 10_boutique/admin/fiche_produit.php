<?php

// (REQUIRE CONNEXION, SESSION ETC)
require_once '../inc/init.inc.php';

if (!estAdmin()) {  // accès non autorisé si on est pas admin (et pas connecté)
    header('location:../connexion.php');
}

// 3 - RÉCEPTION DES INFORMATIONS D'UN PRODUIT AVEC $_GET
debug($_GET);
if ( isset($_GET['id_produit']) ) {
    debug($_GET);
    $resultat = $pdoMAB->prepare( " SELECT * FROM produits, categories WHERE produits.id_categorie = categories.id_categorie AND id_produit = :id_produit " );
    $resultat->execute(array(
      ':id_produit' => $_GET['id_produit']
    ));
    // debug($resultat->rowCount());
      if ($resultat->rowCount() == 0) { // ici, si le rowCount est égal à 0 c'est qu'il n'y a pas de produit
          header('location:accueil.php');// ici c'est la redirection vers la page de départ
          exit();// arrêt du script ici
      }  
      $fiche = $resultat->fetch(PDO::FETCH_ASSOC);//je passe les infos dans une variable
    //   debug($fiche);// ferme if isset accolade suivante
      } else {
      header('location:accueil.php');// ici c'est si j'arrive sur la page sans rien dans l'url
      exit();// arrête du script
  }

//4 TRAITEMENT DE MISE À JOUR D'UN PRODUIT
if ( !empty($_POST) ) {//not empty
  debug($_POST);

$_POST['reference'] = htmlspecialchars($_POST['reference']);
$_POST['categorie'] = htmlspecialchars($_POST['categorie']);
$_POST['titre'] = htmlspecialchars($_POST['titre']);
$_POST['description'] = $_POST['description'];
$_POST['couleur'] = htmlspecialchars($_POST['couleur']);
$_POST['taille'] = htmlspecialchars($_POST['taille']);
$_POST['public'] = htmlspecialchars($_POST['public']);
$_POST['prix'] = htmlspecialchars($_POST['prix']);
$_POST['stock'] = htmlspecialchars($_POST['stock']);

$resultat = $pdoMAB->prepare( " UPDATE produits SET reference = :reference, categorie = :categorie, titre = :titre, description = :description, couleur = :couleur, taille = :taille, public = :public, prix = :prix, stock = :stock WHERE id_produit = :id_produit " );// requete préparée avec des marqueurs

$resultat->execute( array(
  ':reference' => $_POST['reference'],
  ':categorie' => $_POST['categorie'],
  ':titre' => $_POST['titre'],
  ':description' => $_POST['description'],
  ':couleur' => $_POST['couleur'],
  ':taille' => $_POST['taille'],
  ':public' => $_POST['public'],
  // ':photo' => $photo_bdd,
  ':prix' => $_POST['prix'],
  ':stock' => $_POST['stock'],
  ':id_produit' => $_GET['id_produit']

));
header('location:accueil.php');
exit();
}

?> 

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Mes styles -->

    <!-- <link rel="stylesheet" href="styles.css" > -->

    <title>Fiche produit - Admin - 10_boutique</title>
  </head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once '../inc/navbar.inc.php';
    ?> 

    <header class="container-fluid bg-danger f-header p-2 mb-4 bg-light">
       <div class="row">
          <div class="col-12 text-center">
              <h1 class="display-4">Fiche produit - Admin - La Boutique</h1>
              <p class="lead">Gestion du produit ID <?php echo $fiche['id_produit']; ?> </p>
              <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
          </div>
       </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container">
        <section class="row py-5 text-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <h2 class="fw-light">Que souhaitez-vous faire ?</h2>
                <a href="connexion.php" class="btn btn-secondary my-2">Connexion</a>
                <a href="inscription.php" class="btn btn-secondary my-2">Inscription</a>
                <a href="accueil.php" class="btn btn-secondary my-2">Shopping</a>
                </p>
            </div>
        </section>
        <!--  fin row -->

        <section class="row m-4 justify-content-center">
            <h2>Le produit : <?php echo $fiche['titre']; ?></h2>           
            <div class="col-md-8 p-2 bg-light border border-primary">
                <table class="table table-striped">
                <tr>
                    <td> <img src="../<?php echo $fiche['photo']; ?>" class="figure-img img-fluid rounded img-admin"></td>
                    <td> ID <?php echo $fiche['id_produit']; ?></td>
                    <td>ref. <?php echo $fiche['reference']; ?></td>                   
                    <td><?php echo $fiche['titre']. ' ' .$fiche['categorie']; ?></td>
                    <td><?php echo $fiche['taille']; ?></td>
                    <td><?php echo $fiche['description']; ?></td>
                    <td><?php echo $fiche['couleur']; ?></td>
                    <td><?php echo $fiche['public']; ?></td>
                    <td><?php echo $fiche['prix']; ?> €</td>
                    <td><?php echo $fiche['stock']; ?></td>
                </tr>
                <!-- fermeture de la boucle -->
            </table>
            </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row m-4 justify-content-center"> 
            <h2>Mise à jour</h2>          
            <div class="col-md-8 p-2 bg-light border border-primary">
                <?php echo $contenu; ?>
                <form action="" method="POST" enctype="multipart/form-data" class="p-2">
                    <!-- l'attribut entype spécifie que le formulaire envoie des fichiers en plus de données texte ; il va nous permettre de télécharger un fichier ici une photo -->

                    <label for="reference" class="form-label">Référence *</label>
                    <!-- ici on a un opérateur de coalescence ; si il n'y rien je mets une chaine vide  -->
                    <input type="text" name="reference" id="reference" class="form-control" value="<?php echo $fiche['reference'] ?? ''; ?>">

                    <label for="id_categorie" class="form-label">Catégorie *</label>
                    <select name="id_categorie" id="id_categorie" class="form-select">
                        <?php    
                        foreach ( $pdoMAB->query ( " SELECT * FROM categories ORDER BY categorie ASC ") as $ligne_categorie ) {
                            echo '<option value="' .$ligne_categorie['id_categorie']. '"';
                            if ( $ligne_categorie['id_categorie'] == $fiche['id_categorie'] ) {
                                echo ' selected';
                            }
                            echo '>' .$ligne_categorie['categorie']. '</option>';
                        }
                        ?>
                    </select>

                    <label for="titre" class="form-label">Titre *</label>
                    <input type="text" name="titre" id="titre" class="form-control" value="<?php echo $fiche['titre'] ?? ''; ?>">

                    <label for="description" class="form-label">Description *</label>
                    <textarea name="description" id="editor" cols="30" rows="3" class="form-control"><?php echo $fiche['description']; ?></textarea>

                    <label for="couleur" class="form-label">Couleur *</label>
                    <input type="text" name="couleur" id="couleur" class="form-control" value="<?php echo $fiche['couleur'] ?? ''; ?>">

                    <label for="taille" class="form-label">Taille *</label>
                    <select name="taille" id="taille" class="form-select">
                    <option value="XS"<?php if (!strcmp("XS", $fiche['taille'])) { echo " selected"; }?>>Extra-small</option>
                        <option value="XS">Extra-small</option>
                        <option value="S">Small</option>
                        <option value="M"<?php if (!strcmp("M", $fiche['taille'])) { echo " selected"; }?>>Medium</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
                        <option value="XL">Extra-large</option>
                    </select>

                    <input type="radio" name="public" value="f" class="form-check-input" checked>
                    <label for="public" class="form-check-label">Femme</label>

                    <input type="radio" name="public" value="m" class="form-check-input">
                    <label for="public" class="form-check-label">Masculin</label>

                    <input type="radio" name="public" value="mixte" class="form-check-input">
                    <label for="public" class="form-check-label">Mixte</label>

                    <!-- <label for="photo" class="form-label">Photographie *</label>
                    <input type="file" name="photo" id="photo" class="form-control"> -->
                    <!-- pour pouvoir utiliser le type="file" il FAUT ABSOLUMENT l'attribut enctype="multipart/form-data" dans la balise form-->

                    <label for="prix" class="form-label">Prix *</label>
                    <input type="text" name="prix" id="prix" class="form-control" value="<?php echo $fiche['prix'] ?? ''; ?>">

                    <label for="stock" class="form-label">Stock *</label>
                    <input type="text" name="stock" id="stock" class="form-control" value="<?php echo $fiche['stock'] ?? ''; ?>">

                    <button class="btn btn-outline-success" type="submit">Mise à jour</button>

                </form>
            </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->
    </main>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  
    <?php 
        require_once '../inc/footer.inc.php';
    ?> 

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>