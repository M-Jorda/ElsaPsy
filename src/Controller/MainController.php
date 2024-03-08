<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController {
    #[Route('/', name: 'main_home')]
    public function home() {
        return $this->render('home/index.html.twig');

    }#[Route('/pourquoi_consulter', name: 'main_pourquoi')]
    public function pourquoiConsulter() {
        return $this->render('pourquoiConsulter/pourquoiConsulter.html.twig');

    }#[Route('/visio_conference', name: 'main_visio')]
    public function visioConference() {
        return $this->render('visioConference/visioConference.html.twig');

    }#[Route('/tarif', name: 'main_tarif')]
    public function tarif() {
        return $this->render('tarif/tarif.html.twig');

    }#[Route('/contact', name: 'main_contact')]
    public function contact() {
        return $this->render('contact/contact.html.twig');
    }
}