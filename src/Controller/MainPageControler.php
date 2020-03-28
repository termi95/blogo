<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainPageControler extends AbstractController 
{
    /**
     * Undocumented function
     *
     * @return Response
     */
    public function index():Response
    {
        return $this->render('mainPage.html.twig');
    }
}