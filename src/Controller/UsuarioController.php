<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UsuarioController extends AbstractController
{
    #[Route('/usuario', name: 'app_usuario')]
    public function index(): Response
    {
        $data = ['nombre' => 'Josue', 'apellido' => 'Chambilla', 'edad' => 50];

        return $this->render('usuario/index.html.twig',[
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'edad' => $data['edad'],
        ]);
    }

    #[Route('/supervisor', name:'app_supervisor')]
    public function supervisor(): Response
    {
        return $this->render('usuario/supervisor.html.twig',[
            'apodo' => 'Pepito',
        ]);
    }
}
