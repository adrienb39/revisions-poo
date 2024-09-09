<?php

class Acteur {
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom() : string {
        return $this->nom;
    }
    public function getPrenom() : string {
        return $this->prenom;
    }
    public function setNom(string $nom) : Acteur {
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom) : Acteur {
        $this->prenom = $prenom;
    }
}