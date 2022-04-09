<?php 
// require connexion, session etc.
require_once '../inc/init.inc.php';

if (!estAdmin()) { // accès non autorisé si on n'est pas admin (et pas connecté)
    header('location:../connexion.php');
}

// 1 INSERTION D'UN PRODUIT 

if (!empty($_POST)) {

    // 9 conditions pour vérifier que les champs du form sont bien remplis
    
    if ( !isset($_POST['reference']) || strlen($_POST['reference']) < 5 || strlen($_POST['reference']) > 20) {
        $contenu .='<div class="alert alert-warning">La référence : entre 5 et 20 caractères</div>';
    }
    if ( !isset($_POST['categorie']) || strlen($_POST['categorie']) < 2 || strlen($_POST['categorie']) > 20) {
        $contenu .='<div class="alert alert-warning">Catégorie : entre 5 et 20 caractères</div>';
    }

    if ( !isset($_POST['titre']) || strlen($_POST['titre']) < 5 || strlen($_POST['titre']) > 100) {
        $contenu .='<div class="alert alert-warning">Titre entre 5 et 100 caractères</div>';
    }

    if ( !isset($_POST['description']) || strlen($_POST['description']) < 4 || strlen($_POST['description']) > 200) {
        $contenu .='<div class="alert alert-warning">Description incomplète !</div>';
    }
    if ( !isset($_POST['couleur']) || strlen($_POST['couleur']) < 4 || strlen($_POST['couleur']) > 20) {
        $contenu .='<div class="alert alert-warning">Couleur : entre 4 et 20 caractères</div>';
    }

    if ( !isset($_POST['taille']) || strlen($_POST['taille']) < 1 || strlen($_POST['taille']) > 5) {
        $contenu .='<div class="alert alert-warning">Taille : entre 1 et 5 caractères</div>';
    }

    if ( !isset($_POST['public']) || $_POST['public'] != 'm' && $_POST['public'] != 'f'  && $_POST['public'] != 'mixte' ) { // && ET
        $contenu .='<div class="alert alert-warning">Public : non conforme !</div>';
    }
    if ( !isset($_POST['prix']) || strlen($_POST['prix']) < 1 || strlen($_POST['prix']) > 5 ) {
        $contenu .='<div class="alert alert-warning">Prix : rentrez le prix de vente !</div>';
    }

    if ( !isset($_POST['stock']) ) {
        $contenu .='<div class="alert alert-warning">Stock : rentrez la quantité !</div>';
    }

    if (empty($contenu)) {
    $_POST['reference'] = htmlspecialchars($_POST['reference']);
    $_POST['categorie'] = htmlspecialchars($_POST['categorie']);
    $_POST['titre'] = htmlspecialchars($_POST['titre']);
    $_POST['description'] = addslashes($_POST['description']);
    $_POST['couleur'] = htmlspecialchars($_POST['couleur']);
    $_POST['taille'] = htmlspecialchars($_POST['taille']);
    $_POST['public'] = htmlspecialchars($_POST['public']);
    $_POST['prix'] = htmlspecialchars($_POST['prix']);
    $_POST['stock'] = htmlspecialchars($_POST['stock']);

    // debug($_POST);
    // var_dump($_POST);

    // debug($_FILES);
    // traitement du fichier image, de la photo

    $photo_bdd = '';
    if (!empty($_FILES['photo']['name'])) {
        $photo_bdd = 'photos/' .$_FILES['photo']['name'];
        copy($_FILES['photo']['tmp_name'], '../' .$photo_bdd);
    }//fin du traitement photo

    $requete =  executeRequete( " INSERT INTO produits (reference, categorie, titre, description, couleur, taille, public, photo, prix, stock ) VALUES ( :reference, :categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock ) ",
    array(
        ':reference' => $_POST['reference'],
        ':categorie' => $_POST['categorie'],
        ':titre' => $_POST['titre'],
        ':description' => $_POST['description'],
        ':couleur' => $_POST['couleur'],
        ':taille' => $_POST['taille'],
        ':public' => $_POST['public'],
        ':photo' => $photo_bdd,
        ':prix' => $_POST['prix'],
        ':stock' => $_POST['stock'],
    ));

    if ($requete) {
        $contenu .= '<div class="alert alert-success">Le produit a été enregistré.</div>';
    } else {
        $contenu .= '<div class="alert alert-danger">Erreur lors de l\'enregistrement...</div>';
    }
  } 
}// fin insertion nouveau produit

// 2 SUPPRESSION D'UN ARTICLE

// debug($_GET);
if (isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['id_produit'])) {
  $resultat = $pdoMAB->prepare( " DELETE FROM produits WHERE id_produit = :id_produit " );

  $resultat->execute(array(
    ':id_produit' => $_GET['id_produit']
  ));

  if ($resultat->rowCount() == 0) {
    $contenu02 .= '<div class="alert alert-danger"> Erreur de suppression</div>';
  } else {
    $contenu02 .= '<div class="alert alert-success"> Produit supprimé</div>';
  }
}
?> 
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>La Boutique - Administration</title>

	<!-- ck editor 4  -->
    <script src="https://cdn.ckeditor.com/4.18.0/basic/ckeditor.js"></script>
  </head>
  <body class="m-2">
      
  <?php require_once '../inc/nav.inc.php'; ?>

   <header class="container bg-warning text-white p-4 ">
        <div class="row">
          <div class="col-5">
            <h1 class="display-4">Admin</h1>
            <p class="lead">La Boutique gestion des produits</p>
          </div>         
          <?php require_once '../inc/navbis.inc.php'; ?>
        </div>
   </header>

   <div class="container">      
        <section class="row m-4 justify-content-center">
          
            <?php echo $contenu02; ?>
            <?php
             $requete = $pdoMAB->query( " SELECT * FROM produits " );
             $nbr_produits = $requete->rowCount();
            ?>
            <h2>Les produits : <?php echo $nbr_produits; ?></h2>           
            <div class="col-md-8 p-2 bg-light border border-primary">
                <table class=" table table-striped">
            <?php
            // https://www.w3schools.com/php/func_string_html_entity_decode.asp
              while ( $ligne = $requete->fetch( PDO::FETCH_ASSOC )) { ?>
                <tr>
                    <td> <img src="../<?php echo $ligne['photo']; ?>" class="figure-img img-fluid rounded img-admin"></td>
                    <td> <?php echo $ligne['id_produit']; ?></td>
                    <td>ref. <?php echo $ligne['reference']; ?></td>                   
                    <td><?php echo $ligne['titre']. ' ' .$ligne['categorie']; ?></td>
                    <td><?php echo html_entity_decode($ligne['description']); ?></td>
                    <td><?php echo $ligne['couleur']; ?></td>
                    <td><?php echo $ligne['public']; ?></td>
                    <td><?php echo $ligne['prix']; ?> Euros</td>
                    <td><?php echo $ligne['stock']; ?></td>
                    <td><a href="fiche_produit.php?id_produit=<?php echo $ligne['id_produit']; ?>">maj</a></td>
                    <td><a href="?action=supprimer&id_produit=<?php echo $ligne['id_produit']; ?>" onclick="return(confirm('Voulez-vous supprimer cet article id  <?php echo $ligne['id_produit']; ?> ? '))">suppr</a></td>
                </tr>
                <!-- fermeture de la boucle -->
            <?php   } 
            ?>
            </table>
            </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row m-4 justify-content-center"> 
            <h2>Insertion d'un nouveau produit</h2>          
            <div class="col-md-8 p-2 bg-light border border-primary">
                <?php echo $contenu; ?>
                <form action="" method="POST" enctype="multipart/form-data" class="p-2">
                    <!-- l'attribut entype spécifie que le formulaire envoie des fichiers en plus de données texte ; il va nous permettre de télécharger un fichier ici une photo -->

                    <label for="reference" class="form-label">Référence *</label>
                    <input type="text" name="reference" id="reference" class="form-control">

                    <label for="categorie" class="form-label">Catégorie *</label>
                    <input type="text" name="categorie" id="categorie" class="form-control">

                    <label for="titre" class="form-label">Titre *</label>
                    <input type="text" name="titre" id="titre" class="form-control">

                    <label for="description" class="form-label">Description *</label>
                    <textarea name="description" cols="30" rows="3" class="form-control">Exemple de description.</textarea>
                    <script>
                        CKEDITOR.replace( 'description' );
                    </script>
                    <label for="couleur" class="form-label">Couleur *</label>
                    <input type="text" name="couleur" id="couleur" class="form-control">

                    <label for="taille" class="form-label">Taille *</label>
                    <select name="taille" id="taille" class="form-select">
                        <option value="XS">Extra-small</option>
                        <option value="S">Small</option>
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

                    <label for="photo" class="form-label">Photographie *</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                    <!-- pour pouvoir utiliser le type="file" il FAUT ABSOLUMENT l'attribut enctype="multipart/form-data" dans la balise form-->

                    <label for="prix" class="form-label">Prix *</label>
                    <input type="text" name="prix" id="prix" class="form-control">

                    <label for="stock" class="form-label">Stock *</label>
                    <input type="text" name="stock" id="stock" class="form-control">

                    <button class="btn btn-outline-success" type="submit">Ajouter un produit</button>
                </form>
            </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->      
   </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>