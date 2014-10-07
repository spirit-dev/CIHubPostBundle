<?php

namespace SpiritDev\Bundle\CIHubPostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller {

    /**
     * @Route("/index")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('SpiritDevCIHubCoreBundle:Project')->findAll();
        $user = $this->getUser();
        return $this->render('@SpiritDevCIHubPost/Default/index.html.twig', array(
            'name' => $user,
            'projects' => $projects
        ));
    }
}
