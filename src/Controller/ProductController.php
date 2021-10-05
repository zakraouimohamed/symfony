<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'name'=>"zac"
        ]);
    }
    /**
     * @Route("/ListProduct/{var}/{var1}", name="ListProduct")
     */
    public function ListProduct($var,$var1){
        return new Response('La liste des produits '. $var  .$var1);

    }
}
