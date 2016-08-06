<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\HistoriaClinica;
use CardioBundle\Form\HistoriaClinicaType;

/**
 * HistoriaClinica controller.
 *
 */
class HistoriaClinicaController extends Controller
{
    /**
     * Lists all HistoriaClinica entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historiaClinicas = $em->getRepository('CardioBundle:HistoriaClinica')->findAll();

        return $this->render('historiaclinica/index.html.twig', array(
            'historiaClinicas' => $historiaClinicas,
        ));
    }

    /**
     * Creates a new HistoriaClinica entity.
     *
     */
    public function newAction(Request $request)
    {
        $historiaClinica = new HistoriaClinica();
        $form = $this->createForm('CardioBundle\Form\HistoriaClinicaType', $historiaClinica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historiaClinica);
            $em->flush();

            return $this->redirectToRoute('historia-clinica_show', array('id' => $historiaClinica->getId()));
        }

        return $this->render('historiaclinica/new.html.twig', array(
            'historiaClinica' => $historiaClinica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a HistoriaClinica entity.
     *
     */
    public function showAction(HistoriaClinica $historiaClinica)
    {
        $deleteForm = $this->createDeleteForm($historiaClinica);

        return $this->render('historiaclinica/show.html.twig', array(
            'historiaClinica' => $historiaClinica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing HistoriaClinica entity.
     *
     */
    public function editAction(Request $request, HistoriaClinica $historiaClinica)
    {
        $deleteForm = $this->createDeleteForm($historiaClinica);
        $editForm = $this->createForm('CardioBundle\Form\HistoriaClinicaType', $historiaClinica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($historiaClinica);
            $em->flush();

            return $this->redirectToRoute('historia-clinica_edit', array('id' => $historiaClinica->getId()));
        }

        return $this->render('historiaclinica/edit.html.twig', array(
            'historiaClinica' => $historiaClinica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a HistoriaClinica entity.
     *
     */
    public function deleteAction(Request $request, HistoriaClinica $historiaClinica)
    {
        $form = $this->createDeleteForm($historiaClinica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historiaClinica);
            $em->flush();
        }

        return $this->redirectToRoute('historia-clinica_index');
    }

    /**
     * Creates a form to delete a HistoriaClinica entity.
     *
     * @param HistoriaClinica $historiaClinica The HistoriaClinica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HistoriaClinica $historiaClinica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historia-clinica_delete', array('id' => $historiaClinica->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
