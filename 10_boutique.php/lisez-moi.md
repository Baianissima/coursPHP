# lisez-moi.md

<!-- ## est équivalent au h1 -->
## Création de la BDD nomée "boutique"
    #### La BDD comporte 4 tables :
    commandes
    details_commande
    membres
    produits

## TABLE commandes
    id_commande
    id_membre
    montant
    date_enregistrement
    etat (enum : 'en cours de traitement', 'envoyé', 'livré)

## TABLE details_commande
    id_detail_commande
    id_commande
    id_produit
    quantite
    prix

## TABLE membres
    id_membre
    pseudo
    mdp
    nom
    prenom
    email
    civilite (enum, 'm', 'f')
    ville
    code_postal
    adresse
    statut // si on est admin ou client

## TABLE produits
    id_produit
    reference
    categorie
    description
    couleur
    taille
    public (enum, 'm', 'f', 'mixte')
    photo
    prix
    stock

