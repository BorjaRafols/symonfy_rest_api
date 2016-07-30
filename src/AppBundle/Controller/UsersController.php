<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Users:index.html.twig', array(
            // ...
        ));
    }

    public function showAction($slug)
    {
        return new Response("Show one user");

        return $this->render('AppBundle:Users:show.html.twig', array(
            // ...
        ));
    }

}
