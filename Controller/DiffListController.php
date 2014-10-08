<?php

namespace SpiritDev\Bundle\CIHubPostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use SpiritDev\Bundle\CIHubPostBundle\Entity\DiffList;
use SpiritDev\Bundle\CIHubPostBundle\Form\DiffListType;

class DiffListController extends Controller {

    /**
     * @Route("/new")
     */
    public function newAction() {
        $request = $this->get('request');

        $newDiffList = new DiffList();
//        $newDiffList->setName($request->get('name'));
//        $newDiffList->setDescription($request->get('description'));
//        $em = $this->getDoctrine()->getManager();
//        $project = $em->getRepository('SpiritDevCIHubCoreBundle:Project')->find($request->get('project'));
//        $newDiffList->setProject($project);
        $form = $this->createForm(new DiffListType(), $newDiffList);
        $form->handleRequest($request);

        $response = new JsonResponse();
        if ($form->isValid()) {
            $response->setData(array(
                'issue' => 'ok'
            ));
            $response->setStatusCode(200);
//            return array('form' => $form->createView(), 'status' => 'Form valid');
        }
        else {
            $response->setData(array(
                'issue' => 'nok'
            ));
            $response->setStatusCode(206);
//            return array('form' => $form->createView(), 'status' => 'Form invalid');
        }
        return $response;
//        return array('form' => $form->createView(), 'status' => '');
    }
}
