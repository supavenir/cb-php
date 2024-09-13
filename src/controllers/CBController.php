<?php

namespace App\controllers;

use App\models\CompteBancaire;

class CBController extends AbstractController
{

    private function getMenu():array{
        $defaultMenu= [
            ['href'=>'/','label'=>'Accueil'],
            ['href'=>'/newCompte','label'=>'Nouveau Compte'],
        ];
        if(isset($_SESSION['cb'])){
            $defaultMenu[]=['href'=>'/crediter','label'=>'Créditer'];
            $defaultMenu[]=['href'=>'/debiter','label'=>'Débiter'];
            $defaultMenu[]=['href'=>'/fermer','label'=>'Fermer le compte'];

        }
        return $defaultMenu;
    }

    public function render(string $template, array $data = [])
    {
        $data['menu']=$this->getMenu();
        return parent::render($template, $data);
    }

    public function index()
    {
        return $this->render('index.html.twig');
    }

    /*
     * Route GET /newCompte
     */
    public function newCompteForm()
    {
        return $this->render('compteForm.html.twig');
    }
    /*
     * Route POST /newCompte
     */
    public function newCompteCreate()
    {
        $titulaire = $_POST['titulaire'];
        $compte= new CompteBancaire($titulaire);
        $_SESSION['cb'] = $compte;
        return $this->render('index.html.twig',['message'=>"Le compte $compte a été créé"]);
    }

    public function fermer()
    {
        $_SESSION['cb']=null;
        unset($_SESSION['cb']);
        session_destroy();
        return $this->render('index.html.twig',['message'=>"Le compte a été fermé"]);
    }
}