<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class GrumpyKangarooController extends AbstractController
{
    #[Route('/grumpy/kangaroo', name: 'grumpy_kangaroo')]
    public function index(): Response
    {
        $arr = [];
        for ($i = 0; $i < 10; $i++) {
            $arr[$i] = "Test $i";
        }

        VarDumper::dump($arr);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GrumpyKangarooController.php',
        ]);
    }
}
