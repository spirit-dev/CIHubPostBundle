<?php

namespace SpiritDev\Bundle\CIHubPostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DiffListController extends Controller {

    /**
     * @Route("/new")
     */
    public function newAction($name) {
        return $this->render('', array('name' => $name));
    }
}
