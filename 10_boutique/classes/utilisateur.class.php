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

                //Ici nous ajoutons lui deux propriétés qu’on va appeler $user_name et $user_pass par exemple (pour « nom d’utilisateur » et « mot de passe utilisateur »).
                //Ici, nous nous contentons de déclarer nos propriétés sans leur attribuer de valeur :
                class Utilisateur{
                    protected $user_name;
                    protected $user_pass;
                    protected $user_region;
                    protected $prix_abo;
                    // avec le $ en POO on a une proprieté

                    /*Attention: si vous utilisez une version PHP < PHP 7.1, ce code ne
                    *fonctionnera pas*/
                    public const ABONNEMENT = 15;
                    
                    
                    // -> c'est l'opérateur de la proprieté (une sorte de variable) : $this va chercher la proprieté de l'objet en cours
                    public function __construct($n, $p, $r){
                        $this->user_name = $n;
                        $this->user_pass = $p;
                        $this->user_region = $r;
                    }
                    
                    public function __destruct(){
                    //Du code à exécuter
                    }
                    
                    // get = recuperer
                    public function getNom(){
                        echo $this->user_name;
                    }
                    
                    public function setNom($new_user_name){
                        $this->user_name = $new_user_name;
                    }
                    
                    //Une METHODE c'est en fait une FONCTION
                    public function setPasse($new_user_pass){
                        $this->user_pass = $new_user_pass;
                    }

                    // set = 
                    public function setPrixAbo(){
                        /*On peut imaginer qu'on calcule un prix d'abonnement différent
                        *selon les profils des utilisateurs*/
                        if($this->user_region === 'Sud'){
                            return $this->prix_abo = self::ABONNEMENT / 2;
                        }else{
                            return $this->prix_abo = self::ABONNEMENT;
                        }
                    }
                    
                    public function getPrixAbo(){
                        echo $this->prix_abo;
                    }
                }
            ?>
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-4 mx-auto m-4">
                <!-- <p class="alert alert-success border-success text-center"><a href="inscription.php">Pas encore membre ? Inscrivez-vous !</a></p> -->
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-10 mx-auto m-4">
                <h2 class="m-4 p-4 text-center"></h2>         
            </div>
            <!-- fin col -->
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
    crossorigin="anonymous"></script>
</body>
</html>
<?php
    class Utilisateur {
        
    }
?>