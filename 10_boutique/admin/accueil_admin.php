<?php

// (REQUIRE CONNEXION, SESSION ETC)
require_once '../inc/init.inc.php';

if (!estAdmin()) {  // accès non autorisé si on est pas admin (et pas connecté)
    header('location: ../connexion.php');
}

// INSERTION D'UN PRODUIT
if(!empty($_POST)) {  // not empty

    //Ici il faudrait faire 9 conditions pour vérifier que les champs du form sont bien remplis

    if ( !isset($_POST['reference']) || strlen($_POST['reference']) < 5 || strlen($_POST['reference']) > 20) {
        $contenu .='<div class="alert alert-warning">La référence : entre 5 et 20 caractères</div>';
    }
    
    if ( !isset($_POST['id_categorie']) || strlen($_POST['id_categorie']) < 1 || strlen($_POST['id_categorie']) > 3) {
        $contenu .='<div class="alert alert-warning">Choissisez la bonne catégorie</div>';
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
  
    // pour se prémunir des failles et des injections SQL :
    $_POST['reference'] = htmlspecialchars($_POST['reference']);
    $_POST['id_categorie'] = htmlspecialchars($_POST['id_categorie']);
    $_POST['titre'] = htmlspecialchars($_POST['titre']);
    $_POST['description'] = htmlspecialchars($_POST['description']);
    $_POST['couleur'] = htmlspecialchars($_POST['couleur']);
    $_POST['taille'] = htmlspecialchars($_POST['taille']);
    $_POST['public'] = htmlspecialchars($_POST['public']);
    // $_POST['photo'] = htmlspecialchars($_POST['photo']);
    $_POST['prix'] = htmlspecialchars($_POST['prix']);
    $_POST['stock'] = htmlspecialchars($_POST['stock']);

    debug($_POST);

    debug($_FILES);
    // traitement du fichier image, de la photo

    $photo_bdd = '';
    if (!empty($_FILES['photo']['name'])) {
        $photo_bdd = 'photos/' .$_FILES['photo']['name'];
        copy($_FILES['photo']['tmp_name'], '../' .$photo_bdd);
    } // FIN TRAITEMENT PHOTO : ici on ajoute une photo produit

    $requete = executeRequete( " INSERT INTO produits (reference, id_categorie, titre, description, couleur, taille, public, photo, prix, stock ) VALUES (:reference, :id_categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock) ",
    array (
        ':reference' => $_POST['reference'],
        ':id_categorie' => $_POST['id_categorie'],
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
        $contenu .= '<div class="alert alert class-success">Le produit a été enregistré !</div>';
    } else {
        $contenu .= '<div class="alert alert class-danger">Il y a eu une erreur lors de l\'enregistrement...</div>';
    }
} // FIN INSERTION NOUVEAU PRODUIT


// 2 - SUPPRESSION D'UN ARTICLE

// debug($_GET);
if (isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['id_produit'])) {
  $resultat = $pdoMAB->prepare( " DELETE FROM produits WHERE id_produit = :id_produit " );

  $resultat->execute(array(
    ':id_produit' => $_GET['id_produit']
  ));

  if ($resultat->rowCount() == 0) {
    $contenu .= '<div class="alert alert-danger"> Erreur de suppression</div>';
  } else {
    $contenu .= '<div class="alert alert-success"> Produit supprimé</div>';
  }
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

    <title>ACCUEIL ADMIN - 10_boutique</title>
  </head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once '../inc/navbar.inc.php';
    ?> 

    <header class="container-fluid f-header p-2 mb-4 bg-light">
       <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Accueil Admin - La Boutique</h1>
                <p class="lead">Gestion des produits</p>
                <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            </div>
       </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container">
        <section class="row py-5 text-center">
            <div class="py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h2 class="fw-light">Que souhaitez-vous faire ?</h2>
                    <p class="lead text-muted"></p>
                    <p>
                    <a href="connexion.php" class="btn btn-secondary my-2">Connexion</a>
                    <a href="inscription.php" class="btn btn-secondary my-2">Inscription</a>
                    <a href="accueil.php" class="btn btn-secondary my-2">Shopping</a>
                    </p>
                </div>
            </div>
        </section>
        <!--  fin section -->

        <section class="row m-4 justify-content-center">

            <?php 
                $requete = $pdoMAB->query( " SELECT * FROM produits, categories WHERE produits.id_categorie = categories.id_categorie " );
                $nbr_produits = $requete->rowCount();
                // debug($nbr_produits);
            ?>

            <h2>Total de produits : <?php echo $nbr_produits; ?></h2>           
            <div class="col-md-8 p-2 bg-light border border-primary">
                <table class=" table table-striped">
                    <!-- ouverture de la boucle while -->
                    <?php
                        while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC )) { ?>             
                        <tr>
                            <td><img src="../<?php echo $ligne['photo']; ?>" class="figure-img img-fluid rounded img-admin" width="80px" heigth="80px" ></td>
                            <td>ID<?php echo $ligne['id_produit']; ?></td>    
                            <td>REF<?php echo $ligne['reference']; ?></td>
                            <!-- <td>ID<?php echo $ligne['id_categorie']; ?></td> -->
                            <td><?php echo $ligne['titre']; ?></td>
                            <td><?php echo html_entity_decode($ligne['description']); ?></td>
                            <!-- <td><?php echo $ligne['taille']; ?></td> -->
                            <td><?php echo $ligne['couleur']; ?></td>
                            <td><?php echo $ligne['public']; ?></td>
                            <td><?php echo $ligne['prix']; ?></td>
                            <td><?php echo $ligne['stock']; ?></td>
                            <td><a href="fiche_produit.php?id_produit=<?php echo $ligne['id_produit']; ?>">MIS A JOUR</a></td>
                            <td><a href="?action=supprimer&id_produit=<?php echo $ligne['id_produit']; ?>" onclick="return(confirm('Voulez-vous supprimer cet article id  <?php echo $ligne['id_produit']; ?> ? '))">SUPPRIMER</a></td>
                        </tr>
                        <!-- fermeture de la boucle -->           
                    <?php } ?>
                </table>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row m-4 justify-content-center">
            <h2 class="border border-warning text-center">Insertion d'un nouveau produit</h2>
            <div class="col-md-8 p-2 bg-light border border-success">
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- l'attribut enctype spécifie que le formulaire envoie des fichiers en plus des données texte; il va nous permettre de télécharger un fichier ici une photo -->

                    <label for="reference" class="form-label mb-4">Référence *</label>
                    <input type="text" name="reference" id="reference" class="form-control">

                    <label for="id_categorie" class="form-label mb-4">Catégorie *</label>
                        <select name="id_categorie" id="id_categorie" class="form-select">
                            <?php
                                foreach ( $pdoMAB->query ( " SELECT * FROM categories ORDER BY categorie ASC ") AS $ligne_categorie){
                                echo'<option value="' .$ligne_categorie ['id_categorie']. '">' .$ligne_categorie['categorie'].'</option>';}
                            ?>
                        </select>

                    <label for="titre" class="form-label mb-4">Titre *</label>
                    <input type="text" name="titre" id="titre" class="form-control">

                    <label for="description" class="form-label mb-4">Description *</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>

                    <label for="couleur" class="form-label mb-4">Couleur *</label>
                    <input type="text" name="couleur" id="couleur" class="form-control">

                    <label for="taille" class="form-label mb-4">Taille *</label>
                    <select name="taille" id="titre" class="form-control">
                        <option value="XS">Extra-small</option>
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
                        <option value="XL">Extra-large</option>
                    </select>

                    <input type="radio" name="public" value="f" class="form-check-input mb-4" checked>
                    <label for="public" class="form-check-label m-4">Féminin</label>

                    <input type="radio" name="public" value="m" class="form-check-input mb-4">
                    <label for="public" class="form-check-label m-4">Masculin</label>

                    <input type="radio" name="public" value="mixte" class="form-check-input mb-4">
                    <label for="public" class="form-check-label m-4">Mixte</label>

                    <label for="photo" class="form-label mb-4">Photographie</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                    <!-- pour pouvoir utiliser le type="file" IL FAUT ABSOLUMENT L'ATTRIBUT ENCTYPE="multiper/form-data" dans la balise form  -->

                    <label for="prix" class="form-label mb-4">Prix</label>
                    <input type="text" name="prix" id="prix" class="form-control">

                    <label for="stock" class="form-label mb-4">Stock</label>
                    <input type="text" name="stock" id="stock" class="form-control">

                    <button class="btn btn-outline-success" type="submit">Ajouter un produit</button>
                </form>
                <!-- fin form -->
            </div>
            <!-- fin div du form -->
        </section>
        <!-- fin row -->

        <section>
            <?php 
            $requete = $pdoMAB->query( " SELECT * FROM produits ORDER BY id_produit" );
            // debug($resultat);
            $nbr_produits= $requete->rowCount();
            debug($nbr_produits);
            ?>
            <div class="">
                <h4>Il y a <?php echo $nbr_produits; ?> produits dans la BDD de MyBoutique :</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>reference</th>
                            <th>id_categorie</th>
                            <th>titre</th>
                            <th>couleur</th>
                            <th>taille</th>
                            <th>public</th>
                            <th>prix</th>
                            <th>stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- ouverture de la boucle while -->
                    <?php while ( $ligne = $requete->fetch( PDO::FETCH_ASSOC )) { ?>
                    <tr>
                        <td><?php echo $ligne['id_produit']; ?></td> 
                        <td><?php echo $ligne['id_categorie']; ?></td>                   
                        <td><?php echo $ligne['titre']; ?></td>
                        <td><?php echo $ligne['couleur']; ?></td> 
                        <td><?php echo $ligne['taille']; ?></td>
                        <td><?php echo $ligne['public']; ?></td>
                        <td><?php echo $ligne['prix']; ?></td>
                        <td><?php echo $ligne['stock']; ?></td>
                    </tr>
                    <!-- fermeture de la boucle -->
                    <?php } ?>
                    </tbody>
                </table>
                <!-- fin -->
            </div>
        </section>
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