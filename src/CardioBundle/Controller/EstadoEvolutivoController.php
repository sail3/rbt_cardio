<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\EstadoEvolutivo;
use CardioBundle\Form\EstadoEvolutivoType;

/**
 * EstadoEvolutivo controller.
 *
 */
class EstadoEvolutivoController extends Controller
{
    /**
     * Lists all EstadoEvolutivo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoEvolutivos = $em->getRepository('CardioBundle:EstadoEvolutivo')->findAll();

        return $this->render('estadoevolutivo/index.html.twig', array(
            'estadoEvolutivos' => $estadoEvolutivos,
        ));
    }

    /**
     * Creates a new EstadoEvolutivo entity.
     *
     */
    public function newAction(Request $request)
    {
        $estadoEvolutivo = new EstadoEvolutivo();
        $form = $this->createForm('CardioBundle\Form\EstadoEvolutivoType', $estadoEvolutivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoEvolutivo);
            $em->flush();

            return $this->redirectToRoute('esevolutivo_show', array('id' => $estadoEvolutivo->getId()));
        }

        return $this->render('estadoevolutivo/new.html.twig', array(
            'estadoEvolutivo' => $estadoEvolutivo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EstadoEvolutivo entity.
     *
     */
    public function showAction(EstadoEvolutivo $estadoEvolutivo)
    {
        $deleteForm = $this->createDeleteForm($estadoEvolutivo);

        return $this->render('estadoevolutivo/show.html.twig', array(
            'estadoEvolutivo' => $estadoEvolutivo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EstadoEvolutivo entity.
     *
     */
    public function editAction(Request $request, EstadoEvolutivo $estadoEvolutivo)
    {
        $deleteForm = $this->createDeleteForm($estadoEvolutivo);
        $editForm = $this->createForm('CardioBundle\Form\EstadoEvolutivoType', $estadoEvolutivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoEvolutivo);
            $em->flush();

            return $this->redirectToRoute('esevolutivo_edit', array('id' => $estadoEvolutivo->getId()));
        }

        return $this->render('estadoevolutivo/edit.html.twig', array(
            'estadoEvolutivo' => $estadoEvolutivo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EstadoEvolutivo entity.
     *
     */
    public function deleteAction(Request $request, EstadoEvolutivo $estadoEvolutivo)
    {
        $form = $this->createDeleteForm($estadoEvolutivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoEvolutivo);
            $em->flush();
        }

        return $this->redirectToRoute('esevolutivo_index');
    }

    /**
     * Creates a form to delete a EstadoEvolutivo entity.
     *
     * @param EstadoEvolutivo $estadoEvolutivo The EstadoEvolutivo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstadoEvolutivo $estadoEvolutivo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('esevolutivo_delete', array('id' => $estadoEvolutivo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
