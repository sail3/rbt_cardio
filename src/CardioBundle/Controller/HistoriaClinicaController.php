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
        $logged_user = $this->get('security.context')->getToken()->getUser();

        $historiaClinicas = $em->getRepository('CardioBundle:HistoriaClinica')->findAll();

        return $this->render('historiaclinica/index.html.twig', array(
            'historiaClinicas' => $historiaClinicas,
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Creates a new HistoriaClinica entity.
     *
     */
    public function newAction(Request $request)
    {
        $historiaClinica = new HistoriaClinica();
        $logged_user = $this->get('security.context')->getToken()->getUser();
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
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Finds and displays a HistoriaClinica entity.
     *
     */
    public function showAction(HistoriaClinica $historiaClinica)
    {
        $deleteForm = $this->createDeleteForm($historiaClinica);
        $logged_user = $this->get('security.context')->getToken()->getUser();

        return $this->render('historiaclinica/show.html.twig', array(
            'historiaClinica' => $historiaClinica,
            'delete_form' => $deleteForm->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Displays a form to edit an existing HistoriaClinica entity.
     *
     */
    public function editAction(Request $request, HistoriaClinica $historiaClinica)
    {
        $deleteForm = $this->createDeleteForm($historiaClinica);
        $logged_user = $this->get('security.context')->getToken()->getUser();
        $editForm = $this->createForm('CardioBundle\Form\HistoriaClinicaType', $historiaClinica);
        $editForm->handleRequest($request);
        // dump($historiaClinica->getIdpaciente()->getId());exit;
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
            'usuario_activo' => $logged_user,
            'user_id' => $historiaClinica->getIdpaciente()->getId(),
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
