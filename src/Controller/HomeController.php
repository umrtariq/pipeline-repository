<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    public $isIt, $isIsThough;

    public function __construct(){
    }

    /**
     * @Route("/", name="home_page")
     */
    public function index(Request $request) {
        return 5;
    }
}