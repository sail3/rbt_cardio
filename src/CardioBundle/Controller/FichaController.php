<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\Ficha;
use CardioBundle\Form\FichaType;

/**
 * Ficha controller.
 *
 */
class FichaController extends Controller
{
    /**
     * Lists all Ficha entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fichas = $em->getRepository('CardioBundle:Ficha')->findAll();

        return $this->render('ficha/index.html.twig', array(
            'fichas' => $fichas,
        ));
    }

    /**
     * Creates a new Ficha entity.
     *
     */
    public function newAction(Request $request)
    {
        $ficha = new Ficha();
        $form = $this->createForm('CardioBundle\Form\FichaType', $ficha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficha);
            $em->flush();

            return $this->redirectToRoute('ficha_show', array('id' => $ficha->getId()));
        }

        return $this->render('ficha/new.html.twig', array(
            'ficha' => $ficha,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ficha entity.
     *
     */
    public function showAction(Ficha $ficha)
    {
        $deleteForm = $this->createDeleteForm($ficha);

        return $this->render('ficha/show.html.twig', array(
            'ficha' => $ficha,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ficha entity.
     *
     */
    public function editAction(Request $request, Ficha $ficha)
    {
        $deleteForm = $this->createDeleteForm($ficha);
        $editForm = $this->createForm('CardioBundle\Form\FichaType', $ficha);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficha);
            $em->flush();

            return $this->redirectToRoute('ficha_edit', array('id' => $ficha->getId()));
        }

        return $this->render('ficha/edit.html.twig', array(
            'ficha' => $ficha,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ficha entity.
     *
     */
    public function deleteAction(Request $request, Ficha $ficha)
    {
        $form = $this->createDeleteForm($ficha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ficha);
            $em->flush();
        }

        return $this->redirectToRoute('ficha_index');
    }

    /**
     * Creates a form to delete a Ficha entity.
     *
     * @param Ficha $ficha The Ficha entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ficha $ficha)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ficha_delete', array('id' => $ficha->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
