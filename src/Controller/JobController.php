<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index()
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('job/home.html.twig', [
            'age' => 20,
            'controller_name' => 'JobController',
            'Title' => "Test"
        ]);
    }
}
