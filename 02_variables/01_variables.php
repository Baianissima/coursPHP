<?php
 require_once '../inc/functions.php'; //APPEL DES FONCTIONS

 // NAVBAR EN REQUIRE
require_once '../inc/navbar.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - 01/Variables</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">PHP</h1>
            <p class="lead">Les variables en PHP / 01 Variables</p>

            <!-- ce code en 1 ligne sert à afficher le chemin du fichier sur la page html -->
            <?php echo "<p>Exemple de constante en PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; 
            
            minutePap();
            ?>
        </div>
    </header>
    <!-- fin container-fluid -->

    <div class="container">
        <section class="row m-4 p-4">
            <div class="col-md-6">
                <h2  class="alert-info">Les variables</h2>

                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi de la variable. Les règles de créa tion des noms de la variable sont les suivantes :</p>

                <ul>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret du bas </li>

                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                    
                    <li>La longueur du nom n’est pas limitée, mais il convient d’être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li>
                </ul>
            </div>
            <!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h3  class="alert-info">Déclaration des variables</h3>
                <ul>
                  <li>La déclaration des variables n'est pas obligatoire en debut de script, c'est une différence avec JS ou C. On peut créer des variables n'importe où mais avant de les utiliser. Toutefois utiliser une variable non crée ne provoquera pas d'erreur.</li>

                  <li>Il n'est pas nécessaire d'initialiser une variable et une variable n'aura pas de type.</li>

                  <li>Les noms des variales sont sensibles à la casse (maj et min) ; $mavar est différent de $maVar.</li>
                </ul>
            </div>
            <!-- fin col -->

            <div class="row m-4 p-4">
              <h3 class="alert-info">Noms de variables</h3>

                <div class="col-sm-12 col-md-6">
                  <h5 class="p-4">Noms de variables autorisés</h5>
                    <ul>
                      <li>$mavar</li>
                      <li>$_mavar</li>
                      <li>SM1</li>
                      <li>$_12345</li>
                  </ul>
                </div>
              <!-- fin col -->

                <div class="col-sm-12 col-md-6">
                  <h5  class="p-4">Noms de variables interdits</h5>
                    <ul>
                      <li>$*mavar</li>
                      <li>$5mavar</li>
                      <li>SM1</li>
                      <li>$mavar2+</li>
                  </ul>
                </div>
              <!-- fin col -->
            </div>
            <!-- fin row div dans la row section  -->
        </section>
        <!-- fin section row 1 -->

        <section class="row m-4 p-4">
          <div class="col-sm-12">
            <h3  class="alert-info">Affecter des variables par valeur et par référence</h3>
            <p>Affecter c'est donner une valeur à une variable. A sa création, vous ne donnez pas son type à une variable, c'es la valeur que vous lui affectez qui détermine ce type.</p>
            <h5>Exemples :</h5>
              <ul>
                  <li><code>$mavar = 75;</code></li>

                  <li><code>$mavar = "Paris"; </code> ou <code>$mavar = 'Paris'; </code></li>

                  <li><code>$mavar=7*3+2/5-91%7;</code> : PHP évalue l'expression puis affecte le résultat </li>

                  <li><code>$mavar=mysql_connect($a,$b,$c);</code> : la fonction retourne une ressource </li>

                  <li><code>$mavar=isset($var&&($var==9)); </code> : la fonction retourne une valeur booléenne, TRUE ou FALSE</li>
                </ul>
          </div>
          <!-- fin col -->
        </section>
        <!-- fin section row 2 -->

        <section class="row m-4 p-4">
          <div class="col-sm-12">
            <h2  class="alert-info">Les variables prédéfinies</h2>
            <p>PHP dispose d'un grand nombre de variables prédéfinies, qui contiennent des lightrmations à la fois sur le serveur et sur toutes les données qui peuvent transiter entre le poste client et le serveur, comme les valeurs dans un formulaire, les cookies ou les sessions.</p>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="row">Variable</th>
                  <th scope="row">Utilisation</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><code>$GLOBALS</code></th>
                  <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. $GLOBALS["mavar"] récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions, par exemple).</td>
                </tr>

                <tr>
                  <th scope="row"><code>$_COOKIE</code></th>
                  <td>Contient le nom et la valeur des cookies enregistrés sur le poste client dans un tableau (un array). Les noms des cookies sont les clés de ce tableau.</td>
                </tr>

                <tr>
                  <th scope="row"><code>$_ENV</code></th>
                  <td>Contient le nom et la valeur des variables d'environnement qui sont changeantes selon les serveurs.</td>
                </tr>

                <tr>
                  <th scope="row"><code>$_FILES</code></th>
                  <td>Contient le nom des fichiers téléchargés à partir du poste client.</td>
                </tr>

                <tr>
                  <th scope="row"><code>$_GET<code></th>
                  <td>Contient le nom et la valeur des données issues d’un formulaire envoyé par la méthode GET. Les noms "name", des champs du formulaire sont les clés de ce tableau.</td>
                </tr>

                <tr>
                  <th scope="row"><code>$_POST<code></th>
                  <td>Contient le nom et la valeur des données issues d’un formulaire envoyé par la méthode POST. Les noms des champs du formulaire sont les clés de cet array (ce tableau).</td>
                </tr>
                
                <tr>
                  <th scope="row"><code>$_REQUEST<code></th>
                  <td>Contient l'ensemble des variables "superglobales" <code>$_GET, $_POST, $_COOKIE et $_FILES</code>.</td>
                  <br>
                  <p class="alert alert-success">Une variable superglobale est disponibile partout dans le script, y compris au sein des fonctions !</p>
                </tr>

                <tr>
                  <th scope="row"><code>$_SERVEUR</code></th>
                  <td>Contient lles lightrmations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du sxript en cours d'éxécution. Retenonons les variables suivantes :
                    <ul>
                      <li><code>$_SERVER["HTTP_ACCEPT_LANGUAGE"]</code> : contient le code de la langue du navigateur client. Ex.  <?php echo  $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?></li>

                      <li><code>$_SERVER["HTTP_COOKIE"]</code> : contient le nom et la valeur des cookies. Ex.  <?php echo $_SERVER["HTTP_COOKIE"]; ?></li>

                      <li><code>$_SERVER["HTTP_HOST"]</code> : donne le nom de domaine. Ex. <?php echo $_SERVER["HTTP_HOST"]; ?></li>

                      <li><code>$_SERVER["SERVER_ADDR"]</code> : donne l'adresse IP du serveur. Ex. <?php echo $_SERVER["SERVER_ADDR"]; ?></li>

                      <li><code>$_SERVER["PHP_SELF]</code> : contient le nom du script en cours. Ex <?php echo $_SERVER[">PHP_SELF"]; ?> </li>

                      <li><code>$_SERVER["QUERY_STRING"]</code> : contient lz chaîne de la requête utilisée pour accéder au script. Ex.  <?php echo $_SERVER["QUERY_STRING"]; ?> </li>

                    <!-- Ici cet echo en php vérifie le langage -->
                      <?php echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?>
                    </ul>
                  </td>

                <tr>
                    <th scope="row"><code>$_SESSION</code></th>
                    <td>Contient l'ensemble des noms des variables de session et leurs valeurs</td>
                </tr>
              </tbody>
            </table>
            <!-- fin tableau -->
          </div>
          <!-- fin div col -->
        </section>
        <!-- fin section row 3 -->

        <section class="row">
          <div class="col-md-8">
            <h2>Les opérateurs d'affectation combinés</h2>
            <p>En plus de l'opéarteur classique d'affectation = il en existe plusieurs</p>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="row">opérateurs</th>
                  <th scope="row">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><code>+=</code></th>
                  <td>
                  Addition puis affectation :<br>
                  <code>$x += $y équivaut à $x = $x + $y</code><br>
                  <code>$y</code> peut être une expression complexe dont la valeur est un nombre.
                  </td>
                </tr>

                <tr>
                  <th scope="row"><code>-=</code></th>
							    <td>Soustraction puis affectation :<br>
								  <code>$x -= $y équivaut à $x = $x - $y</code><br>
								  <code>$y</code> peut être une expression complexe dont la valeur est un nombre.</td>
                </tr>

                <tr>
                  <th scope="row"><code>*=</code></th>
							    <td>Multiplication puis affectation :<br>
							    <code>$x *= $y équivaut à $x = $x * $y</code><br>
							    <code>$y</code> peut être une expression complexe dont la valeur est un nombre.</td>
                </tr>

                <tr>
                  <th scope="row"><code>**=</code></th>
							    <td>Puissance puis affectation:<br>
							    <code>$x**=2 équivaut à $x=($x)²</code><br>
                </tr>

                <tr>
                  <th scope="row"><code>/=</code></th>
							    <td>Division puis affectation :<br>
							    <code>$x /= $y équivaut à $x = $x / $y</code><br>
							    <code>$y</code> peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
                </tr>

                <tr>
                  <th scope="row"><code>%=</code></th>
							    <td>Modulo puis affectation :<br>
							    <code>$x /= $y équivaut à $x = $x / $y</code><br>
							    <code>$y</code>peut être une expression complexe dont la valeur est un nombre.</td>
                </tr>

                <tr>
                <th>Concaténation/affectation</th>
                  <td>Concaténation puis affectation :<br>
							    <code>$x .= $y équivaut à $x = $x . $y</code><br>
							    <code>$y</code>peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
                </tr>
            </table>
          </div>
          <!-- fin div col du tableau -->      
        </section>
        <!-- fin section row 4 -->

        <section class="row">
          <div class="col">
            <h2>Les constantes</h2>
            <p>Vous serez parfois amené à utiliser de manière répétitive des informations devant rester constantes dans toutes les pages d’un même site. Il peut s’agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l’écrasement accidentel de ces valeurs, qui pourrait se produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
            <p>On peut définir ses constantes soi-même : pour définir des constantes personalisées, utilisez la fonction <code>define()</code> dont la syntaxe est la suivante <code></code> cf. la page suivante <a href="../00_pages/03_page.php">page avec des constantes</a></p>
          </div>

          <div class="col">Les contantes prédéfinies</div>
          <p>
          
          Il existe... A COMPLETER cette div...
          
          On peut définir ses constantes soi-même : pour définir des constantes personalisées, utilisez la fonction <code>define()</code> dont la syntaxe est la suivante <code></code> cf. la page suivante <a href="">page avec des constantes</a></p> <a href="../00_pages/04_page.php"</a>Constantes prédéfinies</p>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Constantes</th>
                <th scope="col">Résultat</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="col"><code>PHP_VERSION</code></th>
                <td>Version de PHP sur ce serveur n° : <?php echo PHP_VERSION; ?></td>
              </tr>

              <tr>
                <th scope="row"><code>PHP_OS</code></th>
                <td>Système d'exploitation (Operating System) du serveur : <?php echo PHP_OS; ?></td>
              </tr>

              <tr>
                <th scope="row"><code>DEFAULT_INCLUDE_PATH</code></th>
                <td>Chemin d'accès aux fichiers par défaut : <?php echo DEFAULT_INCLUDE_PATH; ?> </td>
              </tr>

              <tr>
                <th scope="row"><code>_FILE_</code></th>
                <td>Nom du fichier en cours d'éxécution : <?php _FILE_; ?> </td>
              </tr>

              <tr>
                <th scope="row"><code>_LINE_</code></th>
                <td>Nom de la ligne du fichier : <?php _LINE_; ?> </td>
              </tr>
            </tbody>
          </table>

        </section>

    </div>
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
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>