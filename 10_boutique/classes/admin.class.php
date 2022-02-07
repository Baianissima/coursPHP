<?php
class Admin extends Utilisateur {
        ///On tente d'afficher $user_name qui n'existe pas dans Admin
        public function getNom2(){
            return $this->pseudo;
        }
        
        /*On surcharge la méthode getNom() de Utilisateur. Ici, on conserve
         *le même code dans la méthode mais c'est cette méthode qui sera
         *utilisée par $pierre*/
        public function getNom(){
            return $this->pseudo;
        }
}
?>