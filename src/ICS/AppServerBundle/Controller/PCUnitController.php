<?php

namespace ICS\AppServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ICS\AppServer\Entity\PCUnit;
use Symfony\Component\HttpFoundation\Request;

class PCUnitController extends Controller {
    
    public function addPCUnitAction(Request $request){
    
    $unit = new \Entity.PCUnit();
    
    $form = $this->createFormBuilder($unit)
        ->add('id', 'text')
        ->add('sourceDiskId', 'text')
        ->add('room', 'text')
        ->add('save', 'submit')  
        ->getForm();
    
    return $this->render('ICSAppServerBundle:Secured:addpcunit.html.twig', array(
        'form' => $form->createView(),
        ));
    }
}