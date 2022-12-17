<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author hachm
 */
class AccueilController {
    /**
     * @Route ("/" , name="accueil")
     * @return Response
     */
    
    public function index(): Response{
        return new Response ('hello ')
        ;
    }
}
