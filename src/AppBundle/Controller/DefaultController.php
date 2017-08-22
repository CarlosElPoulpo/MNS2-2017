<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/stages", name="stages")
     */
    public function stageAction(Request $request)
    {
        return $this->render(":default:stages.html.twig");
    }

    /**
     * @Route("/consultation-nutrition", name="consultation")
     */
    public function consultationAction(Request $request)
    {
        return $this->render(":default:consultation.html.twig");
    }

    /**
     * @Route("/formation-nutrition", name="formations")
     */
    public function formationsAction(Request $request)
    {
        return $this->render(":default:formations.html.twig");
    }

    /**
     * @Route("/sportifs", name="sportifs")
     */
    public function sportifsAction(Request $request)
    {
        return $this->render(":default:sportifs.html.twig");
    }
}
