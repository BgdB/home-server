<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function loginAction()
    {
        return $this->render('AppBundle:Login:login.html.twig');
    }
}
