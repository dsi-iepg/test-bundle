<?php
namespace Tuto\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class BundleController extends AbstractController
{
    /**
    * @Route("/hello-bundle", name="tuto_tools_home", methods={"GET","POST"})
    */
    public function index(): Response
    {
        return $this->render('@tuto_tools/mybundle/index.html.twig', [
            'controller_name' => "Hej c'est moi le bundle ",
        ]);
    }
}