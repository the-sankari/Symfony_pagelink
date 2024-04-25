<?php
namespace App\Controller;

// Importing the necessary classes for the controller
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// Defining the HomeController class that extends the AbstractController
class HomeController extends AbstractController
{
    // Defining a route for the index method with the path "/home" and name "home"
    #[Route(path: "/home", name: "home")]
    public function index()
    {
        // Rendering the "home/index.html.twig" template
        return $this->render('home/index.html.twig');
    }
}
