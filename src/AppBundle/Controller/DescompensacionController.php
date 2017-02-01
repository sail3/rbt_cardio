<?php

namespace AppBundle\Controller;

use BackendBundle\Entity\Descompensacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Descompensacion controller.
 *
 * @Route("admin/descompensacion")
 */
class DescompensacionController extends Controller
{
    /**
     * Lists all descompensacion entities.
     *
     * @Route("/", name="admin_descompensacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $descompensacions = $em->getRepository('BackendBundle:Descompensacion')->findAll();

        return $this->render('descompensacion/index.html.twig', array(
            'descompensacions' => $descompensacions,
        ));
    }

    /**
     * Creates a new descompensacion entity.
     *
     * @Route("/new", name="admin_descompensacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $descompensacion = new Descompensacion();
        $form = $this->createForm('AppBundle\Form\DescompensacionType', $descompensacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($descompensacion);
            $em->flush($descompensacion);

            return $this->redirectToRoute('admin_descompensacion_show', array('id' => $descompensacion->getIdDescompensacion()));
        }

        return $this->render('descompensacion/new.html.twig', array(
            'descompensacion' => $descompensacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a descompensacion entity.
     *
     * @Route("/{id}", name="admin_descompensacion_show")
     * @Method("GET")
     */
    public function showAction(Descompensacion $descompensacion)
    {
        $deleteForm = $this->createDeleteForm($descompensacion);

        return $this->render('descompensacion/show.html.twig', array(
            'descompensacion' => $descompensacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing descompensacion entity.
     *
     * @Route("/{id}/edit", name="admin_descompensacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Descompensacion $descompensacion)
    {
        $deleteForm = $this->createDeleteForm($descompensacion);
        $editForm = $this->createForm('AppBundle\Form\DescompensacionType', $descompensacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_descompensacion_edit', array('id' => $descompensacion->getIdDescompensacion()));
        }

        return $this->render('descompensacion/edit.html.twig', array(
            'descompensacion' => $descompensacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a descompensacion entity.
     *
     * @Route("/{id}", name="admin_descompensacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Descompensacion $descompensacion)
    {
        $form = $this->createDeleteForm($descompensacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($descompensacion);
            $em->flush($descompensacion);
        }

        return $this->redirectToRoute('admin_descompensacion_index');
    }

    /**
     * Creates a form to delete a descompensacion entity.
     *
     * @param Descompensacion $descompensacion The descompensacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Descompensacion $descompensacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_descompensacion_delete', array('id' => $descompensacion->getIdDescompensacion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
