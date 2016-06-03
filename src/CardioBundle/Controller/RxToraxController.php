<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\RxTorax;
use CardioBundle\Form\RxToraxType;

/**
 * RxTorax controller.
 *
 */
class RxToraxController extends Controller
{
    /**
     * Lists all RxTorax entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rxToraxes = $em->getRepository('CardioBundle:RxTorax')->findAll();

        return $this->render('rxtorax/index.html.twig', array(
            'rxToraxes' => $rxToraxes,
        ));
    }

    /**
     * Creates a new RxTorax entity.
     *
     */
    public function newAction(Request $request)
    {
        $rxTorax = new RxTorax();
        $form = $this->createForm('CardioBundle\Form\RxToraxType', $rxTorax);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rxTorax);
            $em->flush();

            return $this->redirectToRoute('rx-torax_show', array('id' => $rxTorax->getId()));
        }

        return $this->render('rxtorax/new.html.twig', array(
            'rxTorax' => $rxTorax,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RxTorax entity.
     *
     */
    public function showAction(RxTorax $rxTorax)
    {
        $deleteForm = $this->createDeleteForm($rxTorax);

        return $this->render('rxtorax/show.html.twig', array(
            'rxTorax' => $rxTorax,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RxTorax entity.
     *
     */
    public function editAction(Request $request, RxTorax $rxTorax)
    {
        $deleteForm = $this->createDeleteForm($rxTorax);
        $editForm = $this->createForm('CardioBundle\Form\RxToraxType', $rxTorax);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rxTorax);
            $em->flush();

            return $this->redirectToRoute('rx-torax_edit', array('id' => $rxTorax->getId()));
        }

        return $this->render('rxtorax/edit.html.twig', array(
            'rxTorax' => $rxTorax,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RxTorax entity.
     *
     */
    public function deleteAction(Request $request, RxTorax $rxTorax)
    {
        $form = $this->createDeleteForm($rxTorax);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rxTorax);
            $em->flush();
        }

        return $this->redirectToRoute('rx-torax_index');
    }

    /**
     * Creates a form to delete a RxTorax entity.
     *
     * @param RxTorax $rxTorax The RxTorax entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RxTorax $rxTorax)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rx-torax_delete', array('id' => $rxTorax->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
