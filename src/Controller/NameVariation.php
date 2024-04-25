<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NameVariation extends AbstractController
{
    #[Route(path: "/", name: "name")]
    public function index(Request $request)
    {
        $name = $request->get("name");

        $nameDetails = [];
        if (!empty($name)) {
            $nameDetails = [
                'number_of_character' => strlen($name),
                'first_character' => $name[0],
                'last_character' => $name[strlen($name) - 1],
                'lower_case' => strtolower($name),
                'upper_case' => strtoupper($name),
            ];
        }
        return $this->render('home/index.html.twig', [
            'name' => $name,
            'nameDetails' => $nameDetails, // Corrected variable name
        ]);

    }
}