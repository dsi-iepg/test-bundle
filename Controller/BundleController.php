<?php
namespace Iepg\Bundle\Controller;

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
        return $this->render('@iepgdsi/index.html.twig', [
            'controller_name' => "Hej c'est moi le bundle ",
        ]);
    }

    /**
     * @Route("/hello-bundle2", name="tuto_tools_homee", methods={"GET","POST"})
     */
    public function index2(WithParameterService $service): Response
    {
        return $this->render('@iepgdsi/index.html.twig', [
            'controller_name' => $service->sayHello(),
        ]);
    }
}