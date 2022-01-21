************ instraction ************

### Création de la BDD nom: boutique
## la BDD comporte 4 tables
1- commandes
2 details_commande
3- membres
4- produits

# TABLE COMMANDES
id_commande
id_membre
montant
date_enregistrement
etat (enum :'encours de traitement', 'envoyé', 'livré')

# TABLE DETAILS_COMMANDES
id_detail_commande
id_commande
id_produit
quantite
prix

# TABLE MEMBRES
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


# TABLE PRODUIT
id_produit
reference
categorie
titre
description
couleur
taille
public (enum: 'm', 'f', 'mixte')
photo
prix
stock
