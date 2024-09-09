<?php
require_once 'Acteur.php';
class Film
{
    // Attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;
    private array $acteurs;

    // Méthodes
    // Constructeur permettant de créer des instances d'une classe
    // INSTANCIATION
    public function __construct(string $titre, string $realisateur, DateTime $dateSortie) {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
        $this->acteurs = [];
    }
    // Accesseurs (getters)
    public function getTitre() : string
    {
        return $this->titre;
    }
    public function getRealisateur() : string {
        return $this->realisateur;
    }
    public function getDateSortie() : DateTime {
        return $this->dateSortie;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs() : array {
        return $this->acteurs;
    }
    // Mutateurs (setters)
    public function setTitre(string $titre) : void {
        $this->titre = $titre;
    }
    public function setRealisateur(string $realisateur) : void {
        $this->realisateur = $realisateur;
    }
    public function setDateSortie(DateTime $dateSortie) : void {
        $this->dateSortie = $dateSortie;
    }
    public function setActeur(Acteur $acteurs) : void {
        $this->acteurs[] = $acteurs;
    }
    public function getAnciennete() : int
    {
        $now = new DateTime();
        $intervalle = $now->diff($this->dateSortie);
        return $intervalle->y;
    }
}