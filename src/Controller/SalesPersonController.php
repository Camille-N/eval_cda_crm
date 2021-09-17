<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SalesPersonRepository;

class SalesPersonController extends AbstractController
{
    /**
     * @Route("/sales-person", name="sales_person")
     */
    public function list(SalesPersonRepository $salesPersonRepository): Response
    {
        return $this->render('sales_person/index.html.twig', [
            'sales_persons' => $salesPersonRepository->findAll(),
        ]);
    }
}