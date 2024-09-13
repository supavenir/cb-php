<?php

namespace App\models;

class Operation
{
    private string $libelle;
    private float $montant;
    private \DateTime $date;
    private TypeOperation $type;

    public function __construct(string $libelle,float $montant,TypeOperation $type){
     $this->libelle=$libelle;
     $this->montant=$montant;
     $this->date=new \DateTime();
     $this->type=$type;
    }

    public static function debit(string $libelle,float $montant){
        return new Operation($libelle,$montant,TypeOperation::DEBIT);
    }

    public static function credit(string $libelle,float $montant){
        return new Operation($libelle,$montant,TypeOperation::CREDIT);
    }
}