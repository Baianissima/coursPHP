
<?php 
    // ici une row a etre completée par de données seulement si le formulaire est envoyé

    if (!empty($_POST)) { // si $_POST n'est pas vide = différent de empty (!empty) c'est qu'il est rempli et donc que e formulaire a été envoyé, on peut envoyer un formulaire avec des champs vides. Tout n'est pas obligatoire, les valeurs de $_POST sont alors des strings vides.
        // echo "<section class=\"row bg-warning p-4\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
                
        echo "<p>Prenom :" .$_POST['prenom']. " Nom : " .$_POST['nom']. "</p>";

        echo "<p>Prenom : " .$_POST['prenom']. "</p>";

        echo "<p>Nom : " .$_POST['nom']. "</p>";

        echo "<p>email : " .$_POST['email']. "</p>";

        echo "<p>adresse : " .$_POST['adresse']. "</p>";

        echo "<p>Code postal : " .$_POST['code_postal']. "</p>";
                
        echo "<p>Telephone : " .$_POST['telephone']. "</p>";

        echo "<p>Ville : " .$_POST['ville']. "</p>";

        echo "</div></section>";
    
        // debug($_POST);  cet echo pour afficher le array/tableau et vérifier
        // echo $_POST['nom']; cet echo pour afficher les donnees tapées par l'internaute

        
        // Fabrication d'un fichier texte en l'absence de BDD

        $file = fopen('traitement.txt', 'a'); // fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon e l'ouvrir

        $informations = "Informations reçues : " .$_POST['prenom']. ' ' .$_POST['nom']. ' ' .$_POST['email']. ' ' .$_POST['adresse']. "\n"; // "\n" permet de mettre un saut de ligne

        fwrite($file, $informations); 
        
        
        // la variable $informations contient à chaque envoi les données du formlaire au fichier représenté par $file

        // fwrite() écrit les informations dans le fichier

    }
    ?>    