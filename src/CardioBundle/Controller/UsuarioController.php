<?php

namespace CardioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;

use CardioBundle\Entity\Usuario;
use CardioBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $logged_user = $this->get('security.context')->getToken()->getUser();
        $usuarios = $em->getRepository('CardioBundle:Usuario')->findAll();

        return $this->render('usuario/index.html.twig', array(
            'usuarios' => $usuarios,
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuario();
        $form = $this->createForm('CardioBundle\Form\UsuarioType', $usuario);
        $form->handleRequest($request);
        $logged_user = $this->get('security.context')->getToken()->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $encoder = $this->get('security.encoder_factory')
                          ->getEncoder($usuario);
            $usuario->setSalt(md5(time()));
            $passwordCodificado = $encoder->encodePassword(
              $usuario->getPassword(),
              $usuario->getSalt()
            );
            $usuario->setPassword($passwordCodificado);

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $logged_user = $this->get('security.context')->getToken()->getUser();

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('CardioBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);
        $logged_user = $this->get('security.context')->getToken()->getUser();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('user_edit', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'usuario_activo' => $logged_user,
        ));
    }

    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a Usuario entity.
     *
     * @param Usuario $usuario The Usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuario $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function loginAction()
    {
      // $peticion = $this->getRequest();
      // $sesion = $peticion->getSession();
      // $error = $peticion->attributes->get(
      //   SecurityContext::AUTHENTICATION_ERROR,
      //   $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
      // );
      // return $this->render('login.html.twig', array(
      //   'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
      //   'error' => $error,
      // ));

      $authUtils = $this->get('security.authentication_utils');
      return $this->render('login.html.twig', array(
        'last_username' => $authUtils->getLastUserName(),
        'error' => $authUtils->getLastAuthenticationError(),
      ));
    }

    public function loginCheckAction()
    {
      return new RedirectResponse($this->generateUrl('cardio_homepage'));
    }

    public function logoutAction()
    {
      // return new RedirectResponse($this->generateUrl('login'));
    }

}
