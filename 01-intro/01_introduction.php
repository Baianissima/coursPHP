<!-- Démarrage PHP : repos coursPHP sur OS (C:) -->

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

<body>

    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    
    <header class="container-fluid p-4 bg-grisclair">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-dark">Cours PHP - Introduction</h1>
                <p class="lead"></p>
            </div>
        </div>
        <!-- fin row  -->
    </header>
    <!-- fin div caroussel -->

    <!-- corps central avec contenu principal -->
    <main class="row container-fluid mx-auto bg-grisclair">

         <!-- aside gauche avec nav sommaire -->
         <div class="col-3 p-4">

            <!-- nav pour la page index : sommaire -->
            <nav id="navbar-example3" class="navbar navbar-light flex-column align-items-stretch p-3">
                <a class="navbar-brand" href="#index">Page Index - Sommaire</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#introduction">1. Introduction</a>
                    <a class="nav-link" href="#modelisation">2. Modélisation</a>
                    <a class="nav-link" href="#tables">3. Les tables </a>
                    <a class="nav-link" href="#les_colonnes">4. Les colonnes ou les champs </a>
                    <a class="nav-link" href="#les_types_de_donnees">5. Les types de données</a>
                    <a class="nav-link" href="#pk_ai_id">6. Types de données PK AI pour ID</a>
                    <a class="nav-link" href="#les_cardinalites">7. Les cardinalités</a>
                    <a class="nav-link" href="#table de jointure">8.Table de jointure</a>
                    <a class="nav-link" href="#clefs_etrangères">9. Clefs étrangères ou FK</a>
                    <a class="nav-link" href="#les_enregistrements">10. Les enrégistrements</a>
                    <a class="nav-link" href="#interroger_la_bdd">11. Intérroger la BDD </a>
                </nav>

                 <!-- nav pour la page 01_requêtes -->
                <a class="navbar-brand" href="#">Page 01 - Requêtes</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#introduction">1. Base d'une BDD</a>
                    <a class="nav-link" href="#modelisation">2. 2. Création d'une table</a>
                    <a class="nav-link" href="#tables">3. SELECT et DISTINCT</a>
                    <a class="nav-link" href="#les_colonnes">4. Conditions</a>
                    <a class="nav-link" href="#les_types_de_donnees">5. Opérateurs de comparaison</a>
                    <a class="nav-link" href="#pk_ai_id">6. ORDER BY</a>
                    <a class="nav-link" href="#les_cardinalites">7. Limitation avec LIMIT</a>
                    <a class="nav-link" href="#table de jointure">8. Faire des calculs</a>
                    <a class="nav-link" href="#clefs_etrangères">9. Conditions multiples</a>
                    <a class="nav-link" href="#les_enregistrements"> Regroupements</a>
                </nav>

                <!-- nav pour la page 02_requêtes -->
                <a class="navbar-brand" href="#">Page 02 - Requêtes</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#INSERT INTO, insertion">1. INSERT INTO : insertion</a>
                    <a class="nav-link" href="#modelisation">2. UPDATE, mise à jour</a>
                    <a class="nav-link" href="#tables">3. DELETE : effacer</a>
                    <a class="nav-link" href="#les_colonnes">4. Exos</a>
                </nav>

                <!-- nav pour la page 03_requêtes imbriquées -->
                <a class="navbar-brand" href="#">Page 03 - Requêtes imbriquées <br>
                BDD "bibliotheque"</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">1. Modélisation </a>
                    <a class="nav-link" href="#">2. Création de la table</a>
                    <a class="nav-link" href="#">3. Insertion de contenu</a>
                    <a class="nav-link" href="#">4. Création clé-étrangère</a>
                    <a class="nav-link" href="#">4. Selectionner des tables(SELECT)</a>
                </nav>

                <!-- nav pour la page 04_jointures -->
                <a class="navbar-brand" href="#">Page 04 - Jointures</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">1. Définition </a>
                    <a class="nav-link" href="#">2. Récapitulatif</a>
                    <a class="nav-link" href="#">3. Exemples</a>
                    <a class="nav-link" href="#">4. Jointures externes </a>
                    <a class="nav-link" href="#">5. Jointures externes avec UNION </a>
                </nav>

                <!-- nav pour la page 05_fonctions -->
                <a class="navbar-brand" href="#">Page 05 - Fonctions</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">1. Quelques fonctions </a>
                </nav>

                <!-- nav pour la page 05_exos -->
                <a class="navbar-brand" href="#">Page 06 - EXO: BDD immobilier</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">1. Modélisation de la BDD immobilier : créations des tables et insertion de contenu<br> </a>
                    <a class="nav-link" href="#">2. Exos / récap : multiples requêtes SQL<br> </a>
                </nav>
            </nav>
        </div>

        <!-- ================================================ -->
        <!-- section container : contenu principal -->
        <!-- ================================================ -->
    
        <section class="container col-sm-10 col-md-8 col-lg-6 bg-grisclair">

            <div class="m-4">
                <img src="img/front-back.jpg" class="d-block w-100" alt="front-back">             
            </div>
            <!-- fin div img -->

            <!-- debut row 1 -->
            <div class="row mt-4">
                <h2 id="introduction" class="text-dark p-5">1. Introduction</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-10 col-md-3 col-lg-3 m-4 bg-light">
                    <h3>a) MySQL</h2>
                    <ul>
                        <li>MySQL peut s'utiliser en ligne de commande (Shell, Bash, CMDR et le Terminal sur Mac ou Linux , ou avec une interface graphique comme phpMyAdmin.</li>
                        <br>
                        <li>Pour se connecter en ligne de commande on utilise <code>mysql -u utilisateur -p</code>
                        </li>
                        <br>
                        <li class="alert alert-danger">Attention : il faut penser à mettre le nom d'utilisateur spécifique au serveur ; sur le Pc en local l'utilisateur est 'root' qui signifie 'racine'.
                        </li>
                        <br>
                        <li class = "alert alert-success">Pour une première utilisation il est nécessaire d'installer les variables de commandes (variables d'environnement) avant d'utiliser MySQL en ligne de commande :
                            <ul>
                                <li><a href="https://www.malekal.com/variables-environnement-windows/">Pour Windows, cliquer ici !</a>
                                </li>

                                <br>

                                <li><a href="https://support.apple.com/fr-ne/guide/terminal/apd382cc5fa-4f58-4449-b20a-41c53c006f8f/mac">Pour Mac, <br> cliquez ici !</a><br>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>En local sur PC, par défault il n'y a pas de mot de passe, sur MAC le mot de passe est 'root'.</li>
                        <br>
                        <li>En ligne chaque BDD aura son utilisateur propre et son mot de passe propre.</li>

                        <li class="alert alert-danger">En cas de bug dans le terminal, relancer la BDD : pour reinitier, faire <code>CRTL + C</code> + relancer la BDD avec <code>USE entreprise</code> + taper la requête</li><br>
                        <br>
                    </ul>
                </div>
                
                <div class="col-10 col-md-6 col-lg-3 m-4 bg-light">
                    <h3>b) SGBDR ou SGBD</h3>
                    <ul>
                        <li>Un SGBDR est un système de gestion de base de données relationnelles</li><br>
                        <li>Un système qui permet de gérer une BDD (base de données)</li><br>
                        <li>Un CRUD : create, read, update, delete (creer, lire, télécharger, supprimer)</li><br>
                        <li>Date de naissance du MySql : 1994</li><br>
                        <li>Open source</li><br>
                        <li>Concurrents : Oracle, MS Access, SQLite, PostgreSQL</li><br>
                    </ul>

                    <hr>

                    <ul>
                        <!-- avec abbr on met title pour que le titre s 'affiche directement sur le HTML ? -->
                        <li><abbr title="Système de gestion de base de données relationnelles">SGBDR</abbr>système de gestion de base de données relationnelles</li><br>
                        <li><abbr title="Système de gestion de base de données">SGBD</abbr>système de gestion de base de données</li><br>
                        <li><abbr title="Modèle conceptuel de données">SGBDR</abbr>Modèle conceptuel de données</li><br>
                        <li><abbr title="Base de données">BD</abbr>Base de données</li><br>
                        <li><abbr title="Database">DB</abbr>Database (data base)</li><br>
                        <li><abbr title="Sctructured Query Langage">SQL</abbr>Structured Query Langage</li><br>
                    </ul>
                </div>

                <div class="col-10 col-md-6 col-lg-3 m-4 bg-light">
                    <h3>c) En résumé</h3>
                    <ul>
                        <li>A l'intérieur de la BDD les informations sont classées, sctructurées et regroupées par sujet</li><br>
                        <li>Le langage de requête SQL nous permet d'échanger les informations avec la base; autrement dit, il est utilisé pour la communication entre le client et le serveur</li><br>
                        <li>Dans une BDD les données sont representées sous forme de "table"(une table membre), comme l'Excel avec ses onglets/feuilles</li><br>
                        <li>Une fois que les informations ont été enregistrées, il est important de les gérer (ajout, modification, supression, consultation)</li><br>
                    </ul>
                </div>
            </div>
            <!-- fin row 1  -->

            <!-- debut row 2 -->
            <div class="row mt-4">
                <h2 id="modelisation" class="text-dark p-4">2. Modélisation</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-10 col-md-12 col-lg-10 m-4 bg-light">
                    <h3>1 - Intro</h3><br>
                    <ul>
                        <li>Avant de créer une BDD, il est essentiel de se poser et de réflechir à la modélisation de la base : pour éviter de se tromper.
                        </li><br>

                        <li>Changer la modélisation d'une BDD en cours de production/de projet, n'est pas récommandé. Cela nous forcera à re-écrire une bonne partie des requêtes.          
                        </li><br>

                        <li>Comment modéliser une BDD ?
                        </li><br>
                            <ul>
                                <li>On peut modéliser une BDD sur une feille de papier ou utiliser un logiciel pour nous aider. Exemple : <a href="https://www.mysql.com/fr/products/workbench">MySQL WorkBench</a></li><br>
                                <li>La modélisation se compose de différentes tables (une table = un sujet). Ex.: Si nous vendons des produits il faut uen table des produits et une table des commandes: qu'est-ce qu'il y a comme produits, qu'est-ce que je peux commander...
                                </li><br>
                            </ul>
                    </ul>
                </div>
            </div>
            <!-- fin row 2  -->

            <!-- debut row 3 -->
            <div class="row mt-4">
                <h2 id="tables" class="text-dark p-4">3. Les tables</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="row col-10 col-md-6 col-lg-2 m-4 bg-light">
                    <ul>
                        <ul>
                            <li>1 sujet représente 1 table dans une base de données. </li><br>
                            <li>1 table est un emplacement de sauvegarde.</li><br>
                            <li>Les données sont stockées à l'intérieur de tables. Une table peut être comparée à une liste, qui contient des enregistrements relatifs à un sujet bien défini.</li><br>
                        </ul>
                    </ul>
                </div>
                
                <div class="col-10 col-md-6 col-lg-8 m-4 bg-light">
                    <figure>
                        <img src="img/abonne.png" class="d-block w-100" alt="table_abonne">
                        <figcaption class="bg-light text-center">
                            Il faut réfléchir au sujet et à ses conséquences. Si nous vendons des produits, nous aurons certainement des membres. 1 table membre sera donc nécessaire. En terme de fonctionnalité, si nous souhaitons proposer un abonnement newsletter aux membres, nous aurons besoin d'1 table newsletter repertoriant les membres abonnés <br>
                            <strong>table = 1 sujet</strong></li>
                        </figcaption>
                    </figure>                 
                </div>
                <!-- fin col -->
            </div>
            <!-- fin row 3 -->    

            <!-- debut row 4 -->
            <div class="row mt-4">
                <h2 id="colonnes_champs" class="text-dark p-4">4. Les colonnes et les champs</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="row col-10 col-md-6 col-lg-5 m-4 bg-light">
                    <p class="p-5">Chaque table possède généralement plusieurs champs (aussi appelés colonnes).<br>
                    <br>
                    Les colonnes / champs représentent des caractéristiques relatives au sujet (la table).</p>
                </div>
                
                <div class="col-10 col-md-6 col-lg-5 m-4 bg-light">
                    <p class="p-5">Pour savoir, quelle colonne mettre dans quelle table, il faut se poser la question suivante : qu'est-ce qui pourrait décrire mon sujet ? quelles sont les informations sur mon sujet ? <br>
                    <br>
                    Par exemple, la table membre aura les champs : pseudo, mot de passe, nom, prenom, adresse, email, etc.</p>
                </div>
            </div>
            <!-- fin row 4 -->    

            <!-- debut row 5-->
            <div class="row col-sm-10 col-md-6 col-lg-12 mt-4">
                <h2 id="types" class="text-dark p-4">5. Types de données</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <!-- debut div tableau -->
                <div  m-4 bg-light">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Type de champs</th>
                                <th scope="col">Description</th>
                                <th scope="col">Contexte</th>
                            </tr>                      
                        </thead>
        
                        <tbody>
                            <tr>
                                <th scope="row">DATE</th>
                                <td>Date</td>
                                <td>Pour la date d'un enregistrement (une inscription, la date d'une commande etc.</td>
                            </tr>

                            <tr>
                                <th scope="row">ENUM</th>
                                <td>Une liste (une énumération)</td>
                                <td>Pour proposer une liste de termes. Ex.: "Madame", "Monsieur"</td>
                                </th>
                            </tr>

                            <tr>
                                <th scope="row">INT</th>
                                <td>Numérique</td>
                                <td>Pour un identifiant, un prix, un code postal le nombre de produits en stocks etc</td>                 
                            </tr>

                            <tr>
                                <th scope="row">TEXT</th>
                                <td>Chaîne de caractère (illimité)</td>
                                <td>Pour un contenu textuel long, un article de blog</td>
                                </th>
                            </tr>

                            <tr>
                                <th scope="row">VARCHAR</th>
                                <td>Chaîne (jusqu'à 225 caractères)</td>
                                <td>Pour enregistrer un pseudo, un e-mail, le titre d'un produit ou d'un article de blog</td>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- fin div tableau -->
            </div>
            <!-- fin row 5 -->   
            
            <!-- debut row 6 -->
            <div class="row mt-4">
                <h2 id="donneesPK_AI_pourID" class="text-dark p-4">6. Types de données PK AI pour ID</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <!-- debut des 4 col -->
                <div class="col-12 m-4 p-4 bg-light">
                    <h3>a) PK - Les identifiants - Primary Key et clef primaire</h2><br>
                        <ul>
                            <li>Les identifiants sont des champs un peu particuliers car ils ne décrivent pas le sujet. Ce sont des champs/colonnes systématiquement présents dans chaque table et ce en première position.</li><br>
                            <li>Chaque table possède un champs identifiant, appellé <code>une clef primaire (PK) unique.</code></li><br>
                            <li>Les identifiants sont uniques.</li><br>
                            <li>Par exemple, nous pourrons appeler le champs <code>"id"</code> ou encore <code>"id_membre"</code> ou <code>"idMembre"</code> ou <code>"id_user"</code>.</li><br>
                        </ul
                    </ul>
                </div>
                
                <div class="col-12 m-4 p-4 bg-light">
                    <h3>b) AI (Auto Increment = auto-incrementé)</h3><br>
                    <ul>
                        <li>L'ID membre sera toujours auto-incrementé.</li><br>
                        <li>Auto-incrementé est une option permettant de génerer un numéro unique dans un champ de type clef primaire (identifiant).</li><br>
                        <li>Par conséquent, retenez bien que le 1er champ de chaque table sera systématiquement un <code>"id"</code> qui sera PK et AI.</li><br>
                    </ul>
                </div>

                <div class="col-12 m-4 p-4 bg-light">
                    <h3>c) NULL, NOT NULL</h3><br>
                    <ul>
                        <li>Dans chaque champ, nous pourrons indiquer si nous acceptons les valeurs <code>NULL</code> ou <code>NOT NULL</code></li><br>
                        <li>"Null" est un type de valeur en informatique évitant de laisser un champ vide si nous n'avons pas d'inforamtion à y déposer.</li><br>
                    </ul>
                </div>

                <div class="col-12 m-4 p-4 bg-light">
                    <h3>d) Les relations</h3><br>
                    <p>Il arrive parfois que les sujets interagissent entre eux.
                    </p><br>
                    <ul>
                        <li>Exemples : </li><br>
                        <li>1 membre commande un produit (ou 1 produit est commandé par un membre), nous deveons enregistrer l'information dans une table commande.</li><br>
                        <li>1 conducteur conduit 1 véhicule (ou 1 véhicule est conduit par 1 conducteur), il nous faudra une table permetrant de préciser qui conduit tel véhicule.</li><br>
                    </ul>
                </div>
                <!-- fin des 4 col -->
            </div>
            <!-- fin row 6 -->    

            <!-- debut row 7 -->
            <div class="row mt-4">
                <h2 id="cardinalites" class="text-dark p-4">7. Les cardinalités</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-md-6 col-lg-5 m-4 p-4 bg-light">
                    <p>Les cardinalités permettent de connaître le chiffre minimum et maximum d'enregistrements pour une relation.</p><br>
                        <ul>
                            <li>Exemple 1 : Un homme est le fils d'une femme et d'une seule <code>(min = 1 et max = 1)</code></li><br>
                        </ul> <br>

                    <p>En revanche, une femme peut n'avoir aucun enfant ou plusieurs    
                        <code>(min = 0 et max = n). Ici : (n = nombre entier naturel)</code>(min = 0 et max = n). Ici : (n = nombre entier naturel)
                    </p><br>
                        <ul>
                            <li>Exemple 2 : 1 livre possède forcément 1 auteur et qu'1 seul. <code>Relation (1,1)</code>. Minimum 1 auteur, Maximum 1 auteur. 1 auteur peut avoir écrit plusieurs livre (ou aucun). <code>Relation (0,n)</code>. Minimum 0 livre, Maximum N livres
                            </li>
                        </ul>               
                </div>
                <!-- fin col -->
                
                <div class="col-md-6 col-lg-5 m-4 bg-light">
                    <figure>
                        <img src="img/cardinalites.jpg" class="d-block w-100" alt="les cardinalités">
                        <figcaption class="bg-light text-center">Les cardinalités</figcaption>
                    </figure>
                </div>
                <!-- fin col -->
            </div>
            <!-- fin row 7 --> 


            <!-- debut row 8 -->
            <div class="row mt-4">
                <h2 id="table_de_jointure" class="text-dark p-4">8. Les tables de jointure </h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-10 col-md-6 col-lg-5 m-4 p-4 bg-light">
                    <p class="bg-info">Une table de jointure permet de faire le lien entre 2 tables.</p><br>
                    <p>Exemple : une société de taxi, qui possède des conducteurs et des véhicules.</p><br>
                    <ul>               
                        <li>1 conducteur peut conduire 0 ou plusieurs véhicules.</li><br>
                        <li>1 véhicule peut être conduit par 0 ou plusieurs conducteurs.</li><br>
                    </ul>
                    <p>Comment savoir quel conducteur conduit quel véhicule ?</p>
                    <p>Ou dans l'autre sens, quel véhicule est conduit par quel conducteur ?</p>
                </div>
                <!-- fin col -->

                <div class="col-md-6 col-lg-5 m-4 p-4 bg-light">
                    <figure>
                        <img src="img/jointures.jpg" class="d-block w-100" alt="les tables de jointure">
                        <figcaption class="bg-light text-center">Une table de jointure <br>Avec cette table de jointure, nous savons qu'Alexandre est autorisé à conduire la BM et la Mercedes et Julien ne peut conduire que la BM.</figcaption>
                    </figure>
                </div>
                <!-- fin col -->
            </div>
            <!-- fin row 8 -->
            
            <!-- debut row 9 -->
            <div class="row mt-4">
                <h2 id="clefs_etrangeres" class="text-dark p-4">9. Clefs étrangères ou FK (foreign key)</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-10 m-4 bg-light">
                    <p>Les clefs étrangères sont des champs forcément clefs primaires dans leur table d'origine et qui se retrouvent dans une table extérieure.</p> <br>

                    <p>Un champ clef étrangère permet de faire la relation avec un autre sujet.</p> <br>
                </div>
                <!-- fin col -->
                
                <div class="col-md-5 m-4 bg-light">
                    <figure>
                        <img src="img/clef_etrangere_1.jpg" class="d-block w-100" alt="clef etrangere">
                        <figcaption class="bg-light text-center">Les tables de jointure et les clefs étrangères.<br></figcaption>
                    </figure>
                </div>
                <!-- fin col -->

                <div class="col-md-5 m-4 bg-light">
                    <figure>
                        <img src="img/clef_etrangere_2.jpg" class="d-block w-100" alt="clef etrangere">
                        <figcaption class="bg-light text-center">Les tables de jointure et les clefs étrangères.<br></figcaption>
                    </figure>
                </div>
                <!-- fin col -->
            </div>
            <!-- fin row 9 --> 


            <!-- debut row 10 -->
            <div class="row mt-4">
                <h2 id="enregistrement" class="text-dark p-4">10. Les enregistrements</h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-md-10 m-4 bg-light">
                    <p class="bg-info text-white">Chaque enregistrement represente 1 ligne dans la table de la BDD. Chaque nouvel enregistrement va s'auto-incrementer. Même si un <code>ID</code> est supprimé, il ne sera pas réutilisé !</p><br>
                </div>
                <!-- fin col-10 -->
            </div>
            <!-- fin row 10 -->  

            <!-- debut row 11 -->
            <div class="row mt-4">
                <h2 id="interroger_la_bdd" class="text-dark p-4">11. Interroger la BDD </h2>
                <!-- .col-4*3>h2{$/ Titre} -->

                <div class="col-10 col-md-6 col-lg-5 m-4 bg-light">
                    <h3>a) Les requêtes</h3>
                    <p>Une requête permet de poser une question afin d'obtenir une réponse, ou encore de donner un ordre.</p><br>
                    <p>Nous terminerons toutes nos requêtes SQL par un point virgule <code>" ; "</code> pour que SQL sache que nous avons terminé d'écrire et qu'il doit exécuter notre demande.</p><br>
                    <p>De manière standard, les requêtes SQL seront écrites en MAJUSCULES <code>SELECT * FROM membre;</code></p><br>
                    <p>L'étoile signifie toujours "all = tous".</p><br>
                    <!-- <p></p><br> -->
                </div>
                <!-- fin col -->
                
                <div class="col-10 col-md-6 col-lg-5 m-4 bg-light">
                    <h3>b) Types de requêtes</h3>
                    <p>Il existe 4 types de requêtes :</p>
                    <ul>
                        <li>Sélection <code>SELECT</code> ; requête question/réponse, nous demandons et obtenons une réponse.</li><br>
                        <li>Insertion <code>INSERT</code> ; requête d'action, qui aura un impact sur les données.</li><br>
                        <li>Modification <code>UPDATE</code> ; requête d'action, qui aura un impact sur les données.</li><br>
                        <li>Suppression <code>DELETE</code> ; requête d'action, qui aura un impact sur les données.</li><br>
                    </ul>
                </div>
                <!-- fin col -->
            </div>
            <!-- fin row 11 -->  
        </section>
        <!-- fin container -->    
    </main>
    <!-- fin corps central -->


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

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>