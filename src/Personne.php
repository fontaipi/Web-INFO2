<?php

final class Personne
{

    private $nom;
    private $prenom;
    private $date;

    public function __construct(string $nom, string $prenom, DateTime $date)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
    }

    public function getId(){

    }
}
