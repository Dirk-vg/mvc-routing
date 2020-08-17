<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/about-becode", name="about-becode")
     */
    public function aboutMe(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    /**
     * @Route("/", name="showMyName")
     */
    public function showMyName(): void
    {

    }

    /**
     * @Route("/changeMyName", name="changeMyName", methods="POST")
     */
    public function changeMyName(): void
    {

    }


}
