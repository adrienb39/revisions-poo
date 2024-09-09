<?php

namespace App\Entites;

class Equipe {
    private string $nom;
    private string $nombreLikes;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->nombreLikes = 0;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getNombreLikes(): string
    {
        return $this->nombreLikes;
    }

    public function incrementNombreLikes(): void {
        $this->nombreLikes++;
    }


}