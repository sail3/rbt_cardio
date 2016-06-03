<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\FactorRiesgo;
use CardioBundle\Form\FactorRiesgoType;

/**
 * FactorRiesgo controller.
 *
 */
class FactorRiesgoController extends Controller
{
    /**
     * Lists all FactorRiesgo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factorRiesgos = $em->getRepository('CardioBundle:FactorRiesgo')->findAll();

        return $this->render('factorriesgo/index.html.twig', array(
            'factorRiesgos' => $factorRiesgos,
        ));
    }

    /**
     * Creates a new FactorRiesgo entity.
     *
     */
    public function newAction(Request $request)
    {
        $factorRiesgo = new FactorRiesgo();
        $form = $this->createForm('CardioBundle\Form\FactorRiesgoType', $factorRiesgo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factorRiesgo);
            $em->flush();

            return $this->redirectToRoute('factor-riesgo_show', array('id' => $factorRiesgo->getId()));
        }

        return $this->render('factorriesgo/new.html.twig', array(
            'factorRiesgo' => $factorRiesgo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FactorRiesgo entity.
     *
     */
    public function showAction(FactorRiesgo $factorRiesgo)
    {
        $deleteForm = $this->createDeleteForm($factorRiesgo);

        return $this->render('factorriesgo/show.html.twig', array(
            'factorRiesgo' => $factorRiesgo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FactorRiesgo entity.
     *
     */
    public function editAction(Request $request, FactorRiesgo $factorRiesgo)
    {
        $deleteForm = $this->createDeleteForm($factorRiesgo);
        $editForm = $this->createForm('CardioBundle\Form\FactorRiesgoType', $factorRiesgo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factorRiesgo);
            $em->flush();

            return $this->redirectToRoute('factor-riesgo_edit', array('id' => $factorRiesgo->getId()));
        }

        return $this->render('factorriesgo/edit.html.twig', array(
            'factorRiesgo' => $factorRiesgo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FactorRiesgo entity.
     *
     */
    public function deleteAction(Request $request, FactorRiesgo $factorRiesgo)
    {
        $form = $this->createDeleteForm($factorRiesgo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($factorRiesgo);
            $em->flush();
        }

        return $this->redirectToRoute('factor-riesgo_index');
    }

    /**
     * Creates a form to delete a FactorRiesgo entity.
     *
     * @param FactorRiesgo $factorRiesgo The FactorRiesgo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FactorRiesgo $factorRiesgo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('factor-riesgo_delete', array('id' => $factorRiesgo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
