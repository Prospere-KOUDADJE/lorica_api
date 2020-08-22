<?php

    class LoricaUser{

        private $id_personne;
        private $nom;
        private $prenom;
        private $sexe;
        private $telephone;
        private $adresse;
        private $id_utilisateur;
        private $email;
        private $password;
        private $fonction;
        private $autorisation;

        public function __construct(int $id_personne, string $nom, string $prenom, string $sexe, string $telephone, string $adresse,
        int $id_utilisateur, string $email, string $password, string $fonction, string $autorisation){
            $this->id_personne = $id_personne;
            $this->id_personne = $nom;
            $this->id_personne = $prenom;
            $this->id_personne = $sexe;
            $this->id_personne = $telephone;
            $this->id_personne = $adresse;
            $this->id_personne = $id_utilisateur;
            $this->id_personne = $email;
            $this->id_personne = $password;
            $this->id_personne = $fonction;
            $this->id_personne = $autorisation;
        }

    }