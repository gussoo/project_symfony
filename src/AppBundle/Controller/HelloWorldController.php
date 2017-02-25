<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HelloWorldController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function helloAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('myview/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

     /**
     * @Route("about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('myview/about.html.twig');
    }

     /**
     * @Route("number", name="number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('myview/number.html.twig', array(
            'number' => $number,
        ));
    }
}
