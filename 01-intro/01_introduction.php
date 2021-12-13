<!-- Démarrage PHP : repos coursPHP sur OS (C:) : il faut ouvrir le fichier index de localhost pour travailler sur php, sinon la page ne marche pas : 

http://localhost/coursPHP/01-intro/01_introduction.php  -->

<!-- https://github.com/vienendelsur/coursPHP_suresnes2122 -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - Suresnes 2021/2022</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-vieuxrose>
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    
    <header class="container-fluid p-4 bg-grisclair">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Introduction</h1>
            <p class="lead">PHP : Php Hyper-text Preprocessor</p>
        </div>
    </header>

    <div>
        <section class="row m-2 p-2 justify-content-center">
            <div class="col-md-3 m-2 border border-warning">
                <h4>1/ Réaliser un site dynamique</h4>
                <p>Pour réaliser un site dynamique nous allons aborder les points suivants :</p>
                    <ul>
                        <li>La syntaxe et les caractéristiques du langage PHP (v7)</li>
                        <li>Les notions essentielles du langage SQL permettant la gestion d'une BDD et la réalisation des requêstes de base</li>
                        <li>... et les moyens d'yaccèder à l'aide de fonctions spécialisées de PHP (ou d'objet)</li>

                        <!-- mon premier passage pjp : il faut ouvrir le fichier index de localhost pour travailler sur php -->
                        <!-- le poitn virgule d'une ligne pourrait être supprimer mais c'est mieux de le laisser -->
                        <li>
                            <?php echo "<strong>Mon premier text fait en PHP</strong>"; ?>
                        </li>
                    </ul>
            </div>
            <!-- fin col -->

            <div class="col-md-3 m-2 p-1 border border-warning">
                <h4>2/ Qu'est-ce que <code>PHP</code></h4>
                <p>PHP permet de créer des pages intéractives.</p>
                    <ul>
                        <li>Une page intéractive permet à un visiteur de saisir des données personnelles qui sont transmises au serveur, où elles peuvent rester stockées dans une BDD pour être diffusées vers d'autres utilisateurs. </li>

                        <li>Un utilisateur peut, par exemple, s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieure. Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. </li>

                        <li>En associant toutes ces carctérisques, est possivble de créer aussi bien des sites de diffusion de contenu et de collecte d'informations que des sites e-commerce, de rencontre ou des blogs.</li>
                    </ul>

            </div>
            <!-- fin col -->

            <div class="col-md-3 m-2 p-1 border border-warning">
                <h4>3/ Rappel sur les BDD</h4>
                <ul>
                    <li>Pour contenir la masse d'informations colelctées, PHP s'appuie généralement sur une BDD, le plus souvent MySQL mais aussi SQLite, et sur des serveurs Apache.</li>

                    <li>PHP, MySQL et Apache forment le "trio" ultradominant sur les serveurs Internet. Quand ce trio est associé à un serveur <code>Linux</code>, on parle de <code>LAMP</code>. PHP est utilisé par les 3/4 des sites de la planète. 
                    <li>Pour utiliser PHP sur un PC, on utilisera <code>XAMPP</code> mais aussi <code>Laragon</code>. Sur <code>Mac</code> on privilegiera <code>MAMP</code> Pour Windous ce sera <code>WAMP</code>.</li>
                </ul>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <!-- section 2 -->
        <section class="row m-4 p-4 justify-content-center">
            <div class="col-md-3 m-2 p-2 border border-warning">

                <p>Avec le code suivant écrit dans un fichier nommé 02_infos.php, toutes les infos sur le PHP exécuté dans ce serveur (serveur d'évaluation : (cf. http://localhost/coursPHP/01-intro/01_introduction.php)</p>

                <code>
                &lt;?php <br>
                    phpinfo(); // Ceci est un commentaire <br>
                ?> <br>

                </code>

                <a class="btn btn-secondary btn-sm mb-2" href="02_infos.php">PHP infos</a>
            </div>
            <!-- fin col -->
     
            <div class="col-md-3 m-2 p-2 border border-warning">
                <?php echo date('d/m/Y - H:m:s'); ?>
            </div>
            <!-- fin col -->

            <div class="col-md-3 m-2 p-2 border border-warning">
                <p>La fonction date() avec ses arguments qui nous donnent la date et l'heure du serveur</p>
                <?php // echo date('d/m/Y - H:m:s'); ?>
                
                <?php
                    echo "<h5> Date du jour : ". date('d/m/Y') . "</h5>";
                    echo "<p>Bienvenue sur le cours PHP</p>";
                ?>
            </div>
            <!-- fin col -->

            <div class="col-md-12 p-4 m-4 border border-warning">
                <h4>Le cycle de vie d'une page PHP</h4>
                <ol>
                    <li>Envoie d'une requête HTTP (Hyper TExt Transfer Protocol par le navigateur client vers le serveur du type http://www.monsite.fr/infos.php</li>

                    <li>Interprétation par le serveur du code PHP contenu dans la page appéllée</li>

                    <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML</li>

                    <p><a>Ici un lien ver une autre page PHP</a></p>
                </ol>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        </div>
        <section class="row m-2 p-2">
            <div class="col-md-12 border border-warning">
                <h3>Inclure des fichiers externes en PHP</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fonction</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><code>include("../inc/init.inc.php")</code> : <br>
                            pour inclure des contenus des fichiers externes</td>
                            <td>Lors de son intérpréttion par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre, il faut fournir le nom et l'adresse complète; en cas d erreru, par ex. si le fichier n'est pas trouvé, include() ne genère qu'une alerte (un warning) et le script continue.</td>
                        </tr>

                        <tr>
                            <td><code>require("mon_fichier.php")</code></td>
                            <td>Require() a désormais un comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur "fatale" (fatal error" et met fin au script</td>
                        </tr>

                        <tr>
                            <td><code>include_once("../inc/head.inc.php")</code> :</td>
                            <td>Cette fonction n'est pas exécutée plusieurs fois, même si on la trouve dans une boucle ou si elle ont ete executée une fois dans le code qui précède.</td>               
                        </tr>
                            
                        <tr>
                            <td><code>require_once("mon_fichier.php")</code> :</td>
                            <td>Cette fonction n'est pas exécutée plusieurs fois, même si on la trouve dans une boucle ou si elle ont ete executée une fois dans le code qui précède.</td>
                        </tr>
                    </tbody>
                </table>
                <!-- fin tableau -->
            </div>
            <!-- fin col -->
        </section>
    </div>
    <!-- fin div container -->

    
    <!-- =================================== -->
    <!-- pied de page -->
    <!-- =================================== -->
    
        <!-- Ajouter "container" if you want to extend the Footer to full width/ou container-fluid -->
    <div class="my-5">

        <footer class="text-center text-lg-start bg-jaune">
            <!-- <div class="container d-flex justify-content-center py-5">
                <button type="button" class="btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-facebook-f"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-youtube"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-instagram"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-twitter"></i>
                </button>
            </div> -->

            <!-- Copyright -->
            <div class="text-center text-dark p-5 m-5" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 :
                <a class="text-dark" href="https://mdbootstrap.com/">Vanusa Santos, Colombbus</a>
            </div>
            <!-- Copyright -->     
        </footer>    
  </div>
  <!-- fin div container/fluid du footer -->


  <!-- Commenter à l'intérieur du code PHP si on veut garder l'info que pour le côté serveur !  -->

  <!-- <?php require 
    // Ici on appelle le footer cree dans dossier inc pour qu il se repete sur cette page : 
  '../inc/footer.inc.php'; ?> -->

  <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>