<?php

namespace App\controllers;

class AbstractController
{
    private function getTwig()
    {
        global $twig;
        return $twig;
    }

    public function render(string $template, array $data = [])
    {
        return $this->getTwig()->render($template, $data);
    }

}