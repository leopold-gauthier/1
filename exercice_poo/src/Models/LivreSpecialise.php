<?php

namespace App\Models;

class LivreSpecialise extends Livre {
    private $type;

    public function __construct($titre, $auteur, $dateDeParution,$type)
    {
        parent::__construct($titre, $auteur, $dateDeParution);
        $this->type = $type;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}