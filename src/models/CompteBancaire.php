<?php

namespace App\models;

class CompteBancaire
{
    private string $titulaire;
    private float $solde=80;

    private array $operations;

    public function __construct(string $titulaire,float $solde=0){
        $this->titulaire=$titulaire;
        $this->solde=$solde;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function crediter(float $montant,string $libelle='Crédit'):void {
        $this->solde+=$montant;
        $this->operations[]=Operation::credit($libelle,$montant);
    }

    public function __toString(): string
    {
        return "$this->titulaire [$this->solde €]";
    }

}