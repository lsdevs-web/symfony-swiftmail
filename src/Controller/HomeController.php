<?php

namespace App\Controller;

use App\Entity\MonMail;
use App\Form\MonMailType;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{


    /**
     * @Route("/", name="home")
     * @param Request $request
     * @param MailerService $mailer
     * @return Response
     */
    public function index(Request $request, MailerService $mailer)
    {

        $email = new MonMail();



        $form = $this->createForm(MonMailType::class, $email);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $mailer->sendMail($email->getEmail(), $email->getContent());
            $this->addFlash(
                "success",
                "Le mail à bien été envoyé"
            );

        }


        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),

        ]);
    }
}
