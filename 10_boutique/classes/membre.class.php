<!DOCTYPE html>
<html lang="fr">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <!-- <link rel="stylesheet" href="css/styles.css" > -->

    <title><title>Repo PHP_POO</title></title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <!-- <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1 class="display-4">PHP POO - PROGRAMMATION ORIENTÉE OBJET</h1>
            <p class="lead">Utilisateur</p>
        </div>
    </header> -->
    <!-- fin container-fluid header -->

    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">
            <div>
                <?php

                //Ici nous ajoutons lui deux propriétés qu’on va appeler $pseudo et $user_pass par exemple (pour « nom d’utilisateur » et « mot de passe utilisateur »).
                //Ici, nous nous contentons de déclarer nos propriétés sans leur attribuer de valeur :
                // Mon code :
                // class Utilisateur{
                //     protected $user_civilite;
                //     protected $user_prenom;
                //     protected $prix_nom;
                //     protected $prix_email;
                //     protected $prix_pseudo;
                //     protected $prix_mdp;
                //     protected $prix_adresse;
                //     protected $prix_code_postal;
                //     protected $prix_ville;
                    // avec le $ en POO on a une proprieté

                // Code Fatima :
                class Membre{
                    protected $civilite;
                    protected $prenom;
                    protected $nom;  
                    protected $email;
                    protected $pseudo;
                    protected $mdp;
                    protected $adresse;
                    protected $code_postal;
                    protected $ville;
                    protected $statut;

                    /*Attention: si vous utilisez une version PHP < PHP 7.1, ce code ne
                    *fonctionnera pas*/

                    public const ABONNEMENT = 15;
                    
                    
                    // -> c'est l'opérateur de la proprieté (une sorte de variable) : $this va chercher la proprieté de l'objet en cours // ici on fait le constructeur = les champs du formulaire

                    // Pas de $statut cette fois-ci :
                    public function __construct($civilite, $prenom, $nom, $email, $pseudo, $mdp, $adresse, $code_postal, $ville) {
                        
                        $this->civilite = $civilite;
                        $this->prenom = $prenom;
                        $this->nom = $nom;
                        $this->email = $email;
                        $this->pseudo = $pseudo;
                        $this->mdp = $mdp;
                        $this->adresse = $adresse;
                        $this->code_postal= $code_postal;
                        $this->ville = $ville;
                    }
                    
                    public function isExist() {
                        $membre = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ",
                        array(':pseudo' => $_POST['pseudo']));
                            // si au décompte de cette requete le résultat ne donne pas 0, c'est que le pseudo existe
                            if ($membre->rowCount() > 0)
                                return true;
                            else 
                                return false;
                            }

                    public function insertMembre() {
                        //On exécute la requête d'insertion
                        //On hache le mot de passe avec la fonction prédéfinie password_hash() avec un algoritme 'bcrypt' on passe cette information en variable

                        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // On hâche le mot de passe avec la fonction prédéfinie password_hash() ave un algorythme 'bcrypt', on passe cette information en variable

                        $succes = executeRequete( " INSERT INTO membres (civilite, prenom, nom, email, pseudo, mdp, adresse, code_postal, ville) VALUES (:civilite, :prenom, :nom, :email, :pseudo, :mdp, :adresse, :code_postal, :ville, 0) ",
                            array(
                                ':civilite' => $_POST['civilite'],
                                ':prenom' => $_POST['prenom'],
                                ':nom' => $_POST['nom'],
                                ':email' => $_POST['email'],
                                ':pseudo' => $_POST['pseudo'],
                                ':mdp' => $mdp, // on récupere le mdp de la variable qui contient le hash du mot de passe
                                ':adresse' => $_POST['adresse'],
                                ':code_postal' => $_POST['code_postal'],
                                ':ville' => $_POST['ville'],
                        ));
                        return succes ;
                    }

                    public function __destruct(){
                    //Du code à exécuter
                    }
                    
                    // get = recuperer
                    public function getNom(){
                        echo $this->pseudo;
                    }
                    
                    public function setNom($new_pseudo){
                        $this->pseudo = $new_pseudo;
                    }
                    
                    //Une METHODE c'est en fait une FONCTION
                    // public function setPasse($new_mdp){
                    //     $this->user_pass = $new_mdp;
                    // }

                    
                    // public function setPrixAbo(){
                    //     /*On peut imaginer qu'on calcule un prix d'abonnement différent
                    //     *selon les profils des utilisateurs*/
                    //     if($this->user_region === 'Sud'){
                    //         return $this->prix_abo = self::ABONNEMENT / 2;
                    //     }else{
                    //         return $this->prix_abo = self::ABONNEMENT;
                    //     }
                    // }
                    
                    // public function getPrixAbo(){
                    //     echo $this->prix_abo;
                    // }
                }
            ?>
        </section>
        <!-- fin row -->      
    </main>
    <!-- fin container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  
    
    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous">
    </script>
</body>
</html>