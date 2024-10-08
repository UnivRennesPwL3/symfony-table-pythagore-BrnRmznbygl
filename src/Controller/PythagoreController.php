<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Utility\PythagoreUtility;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct()
    {
        $this->pythagoreUtility = new PythagoreUtility();
    }

    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        $tableHtml = $this->pythagoreUtility->display();

        return $this->render('pythagore/displayPythagore.html.twig', [
            'tableHtml' => $tableHtml,
        ]);
    }
}
