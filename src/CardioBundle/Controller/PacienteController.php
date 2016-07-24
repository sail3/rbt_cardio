<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\Paciente;
use CardioBundle\Form\PacienteType;
use CardioBundle\Controller\FichaController;

/**
 * Paciente controller.
 *
 */
class PacienteController extends Controller
{
    /**
     * Lists all Paciente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $logged_user = $this->get('security.context')->getToken()->getUser();

        $pacientes = $em->getRepository('CardioBundle:Paciente')->findAll();

        return $this->render('paciente/index.html.twig', array(
            'pacientes' => $pacientes,
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Creates a new Paciente entity.
     *
     */
    public function newAction(Request $request)
    {
        $paciente = new Paciente();
        $form = $this->createForm('CardioBundle\Form\PacienteType', $paciente);
        $logged_user = $this->get('security.context')->getToken()->getUser();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paciente);
            $em->flush();

            return $this->redirectToRoute('paciente_show', array('id' => $paciente->getId()));
        }

        return $this->render('paciente/new.html.twig', array(
            'paciente' => $paciente,
            'form' => $form->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Finds and displays a Paciente entity.
     *
     */
    public function showAction(Paciente $paciente)
    {
        $deleteForm = $this->createDeleteForm($paciente);
        $logged_user = $this->get('security.context')->getToken()->getUser();

        return $this->render('paciente/show.html.twig', array(
            'paciente' => $paciente,
            'delete_form' => $deleteForm->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Displays a form to edit an existing Paciente entity.
     *
     */
    public function editAction(Request $request, Paciente $paciente)
    {
        $deleteForm = $this->createDeleteForm($paciente);
        $editForm = $this->createForm('CardioBundle\Form\PacienteType', $paciente);
        $logged_user = $this->get('security.context')->getToken()->getUser();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paciente);
            $em->flush();

            return $this->redirectToRoute('paciente_edit', array('id' => $paciente->getId()));
        }

        return $this->render('paciente/edit.html.twig', array(
            'paciente' => $paciente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Deletes a Paciente entity.
     *
     */
    public function deleteAction(Request $request, Paciente $paciente)
    {
        $form = $this->createDeleteForm($paciente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($paciente);
            $em->flush();
        }

        return $this->redirectToRoute('paciente_index');
    }

    /**
     * Creates a form to delete a Paciente entity.
     *
     * @param Paciente $paciente The Paciente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Paciente $paciente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paciente_delete', array('id' => $paciente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function searchAction(Request $request) {
      // $form = $this->createForm('CardioBundle\Form\BusquedaType');
      // $form->handleRequest($request);
      // if ($form->isSubmitted() && $form->isValid()) {
      //     $dni = $request->request->get('busqueda')['dni'];
      //     $em = $this->getDoctrine()->getManager();
      //     $paciente = $em->getRepository('CardioBundle\Entity\Paciente')->findOneBy(array(
      //       'dni' => $dni,
      //     ));
      //     // return $this->redirectToRoute('ficha_new', array('id' => $paciente->getId()));
      //     $ficha = new FichaController();
      //     return $ficha->newAction($request, $paciente);
      // }
      // return $this->render('paciente/busqueda.html.twig', array(
      //     'form' => $form->createView(),
      // ));
    }
}
