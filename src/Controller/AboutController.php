<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController 
{
    #[Route(path:"/about", name:"about")]
    public function index() {
        return $this->render('about/index.html.twig');
    }
}



?>