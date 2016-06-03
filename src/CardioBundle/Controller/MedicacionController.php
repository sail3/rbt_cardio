<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\Medicacion;
use CardioBundle\Form\MedicacionType;

/**
 * Medicacion controller.
 *
 */
class MedicacionController extends Controller
{
    /**
     * Lists all Medicacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $medicacions = $em->getRepository('CardioBundle:Medicacion')->findAll();

        return $this->render('medicacion/index.html.twig', array(
            'medicacions' => $medicacions,
        ));
    }

    /**
     * Creates a new Medicacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $medicacion = new Medicacion();
        $form = $this->createForm('CardioBundle\Form\MedicacionType', $medicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medicacion);
            $em->flush();

            return $this->redirectToRoute('medicacion_show', array('id' => $medicacion->getId()));
        }

        return $this->render('medicacion/new.html.twig', array(
            'medicacion' => $medicacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Medicacion entity.
     *
     */
    public function showAction(Medicacion $medicacion)
    {
        $deleteForm = $this->createDeleteForm($medicacion);

        return $this->render('medicacion/show.html.twig', array(
            'medicacion' => $medicacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Medicacion entity.
     *
     */
    public function editAction(Request $request, Medicacion $medicacion)
    {
        $deleteForm = $this->createDeleteForm($medicacion);
        $editForm = $this->createForm('CardioBundle\Form\MedicacionType', $medicacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medicacion);
            $em->flush();

            return $this->redirectToRoute('medicacion_edit', array('id' => $medicacion->getId()));
        }

        return $this->render('medicacion/edit.html.twig', array(
            'medicacion' => $medicacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Medicacion entity.
     *
     */
    public function deleteAction(Request $request, Medicacion $medicacion)
    {
        $form = $this->createDeleteForm($medicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($medicacion);
            $em->flush();
        }

        return $this->redirectToRoute('medicacion_index');
    }

    /**
     * Creates a form to delete a Medicacion entity.
     *
     * @param Medicacion $medicacion The Medicacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Medicacion $medicacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('medicacion_delete', array('id' => $medicacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
