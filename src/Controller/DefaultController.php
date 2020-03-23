<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function getIndex()
    {
        return $this->render('index.html.twig', ['today' => date('F j, Y, g:i a')]);
    }
}

