<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\CausaDescompensante;
use CardioBundle\Form\CausaDescompensanteType;

/**
 * CausaDescompensante controller.
 *
 */
class CausaDescompensanteController extends Controller
{
    /**
     * Lists all CausaDescompensante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $causaDescompensantes = $em->getRepository('CardioBundle:CausaDescompensante')->findAll();

        return $this->render('causadescompensante/index.html.twig', array(
            'causaDescompensantes' => $causaDescompensantes,
        ));
    }

    /**
     * Creates a new CausaDescompensante entity.
     *
     */
    public function newAction(Request $request)
    {
        $causaDescompensante = new CausaDescompensante();
        $form = $this->createForm('CardioBundle\Form\CausaDescompensanteType', $causaDescompensante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($causaDescompensante);
            $em->flush();

            return $this->redirectToRoute('causa_show', array('id' => $causaDescompensante->getId()));
        }

        return $this->render('causadescompensante/new.html.twig', array(
            'causaDescompensante' => $causaDescompensante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CausaDescompensante entity.
     *
     */
    public function showAction(CausaDescompensante $causaDescompensante)
    {
        $deleteForm = $this->createDeleteForm($causaDescompensante);

        return $this->render('causadescompensante/show.html.twig', array(
            'causaDescompensante' => $causaDescompensante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CausaDescompensante entity.
     *
     */
    public function editAction(Request $request, CausaDescompensante $causaDescompensante)
    {
        $deleteForm = $this->createDeleteForm($causaDescompensante);
        $editForm = $this->createForm('CardioBundle\Form\CausaDescompensanteType', $causaDescompensante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($causaDescompensante);
            $em->flush();

            return $this->redirectToRoute('causa_edit', array('id' => $causaDescompensante->getId()));
        }

        return $this->render('causadescompensante/edit.html.twig', array(
            'causaDescompensante' => $causaDescompensante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CausaDescompensante entity.
     *
     */
    public function deleteAction(Request $request, CausaDescompensante $causaDescompensante)
    {
        $form = $this->createDeleteForm($causaDescompensante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($causaDescompensante);
            $em->flush();
        }

        return $this->redirectToRoute('causa_index');
    }

    /**
     * Creates a form to delete a CausaDescompensante entity.
     *
     * @param CausaDescompensante $causaDescompensante The CausaDescompensante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CausaDescompensante $causaDescompensante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('causa_delete', array('id' => $causaDescompensante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
