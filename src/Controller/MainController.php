<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/thongtin', name: 'app_thongtin')]
    public function thongtin(): Response
    {
        return $this->render('main/thongtin.html.twig');
    }

    #[Route('/ketqua', name: 'app_ketqua')]
    public function ketqua(): Response
    {
        return $this->render('main/ketqua.html.twig');
    }

    #[Route('/caccong', name: 'app_caccong')]
    public function caccong(): Response
    {
        return $this->render('main/caccong.html.twig');
    }

    #[Route('/lienhe', name: 'app_lienhe')]
    public function lienhe(): Response
    {
        return $this->render('main/lienhe.html.twig');
    }

}
