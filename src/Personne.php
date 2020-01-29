<?php

final class Personne
{

    private $id;
    private $nom;
    private $prenom;
    private $date;

    public function __construct(string $nom, string $prenom, DateTime $date)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;

        $this->id = $nom.$prenom.$date->format("Y-m-d");
    }

    public function getId(): string {
        return $this->id;
    }
}
