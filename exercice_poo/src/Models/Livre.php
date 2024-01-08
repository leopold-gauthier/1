<?php

namespace App\Models;

use App\Interfaces\Recherchable;

class Livre implements Recherchable{
    private $titre;
    private $auteur;
    private $dateDeParution;

    public function __construct($titre,$auteur,$dateDeParution) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->dateDeParution = $dateDeParution;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of dateDeParution
     */ 
    public function getDateDeParution()
    {
        return $this->dateDeParution;
    }

    /**
     * Set the value of dateDeParution
     *
     * @return  self
     */ 
    public function setDateDeParution($dateDeParution)
    {
        $this->dateDeParution = $dateDeParution;

        return $this;
    }
    // Implémentation de la méthode de recherche
    public function rechercher($termeDeRecherche) {
        // Implémentez la logique de recherche spécifique pour un livre
        // Retournez true si le terme de recherche est trouvé, sinon false
        // Par exemple, vous pourriez rechercher dans le titre ou l'auteur du livre.
        return strpos($this->titre, $termeDeRecherche) !== false || strpos($this->auteur, $termeDeRecherche) !== false;
    }
}