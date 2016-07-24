<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CardioBundle\Entity\Paciente;
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
        $logged_user = $this->get('security.context')->getToken()->getUser();

        $fichas = $em->getRepository('CardioBundle:Ficha')->findAll();

        return $this->render('ficha/index.html.twig', array(
            'fichas' => $fichas,
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Creates a new Ficha entity.
     *
     */
    public function newAction(Request $request, Paciente $paciente = null)
    {
        $ficha = new Ficha();
        $form = $this->createForm('CardioBundle\Form\FichaType', $ficha);
        $logged_user = $this->get('security.context')->getToken()->getUser();
        $form->handleRequest($request);
        if ($paciente != null) {
          $formPaciente = $this->createForm('CardioBundle\Form\FichaType', $paciente);
        }
        else {
          $paciente = new Paciente();
          $formPaciente = $this->createForm('CardioBundle\Form\PacienteType', $paciente);
          $formPaciente->handleRequest($request);
        }
        if ($form->isSubmitted() && $form->isValid() && $formPaciente->isSubmitted() && $formPaciente->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficha);
            $em->persist($paciente);
            $em->flush();
            return $this->redirectToRoute('ficha_show', array('id' => $ficha->getId()));
        }

        return $this->render('ficha/new.html.twig', array(
            'ficha' => $ficha,
            'form' => $form->createView(),
            'form_paciente' => $formPaciente->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Finds and displays a Ficha entity.
     *
     */
    public function showAction(Ficha $ficha)
    {
        $deleteForm = $this->createDeleteForm($ficha);
        $logged_user = $this->get('security.context')->getToken()->getUser();

        return $this->render('ficha/show.html.twig', array(
            'ficha' => $ficha,
            'delete_form' => $deleteForm->createView(),
            'usuario_activo' => $logged_user,
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
        $logged_user = $this->get('security.context')->getToken()->getUser();
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('CardioBundle\Entity\Paciente')->findOneBy(array(
              'dni' => 86867686,
            ));
        $pacienteForm = $this->createForm('CardioBundle\Form\PacienteType', $paciente);
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
            'form_paciente' => $pacienteForm->createView(),
            'usuario_activo' => $logged_user,
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
