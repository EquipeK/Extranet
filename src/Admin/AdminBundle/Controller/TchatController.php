<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\AdminBundle\Entity\Tchat;
use Admin\AdminBundle\Form\TchatType;

/**
 * Tchat controller.
 *
 */
class TchatController extends Controller
{
    /**
     * Lists all Tchat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tchats = $em->getRepository('AdminAdminBundle:Tchat')->findAll();

        return $this->render('AdminAdminBundle:Tchat:index.html.twig', array(
            'tchats' => $tchats,
        ));
    }

    /**
     * Creates a new Tchat entity.
     *
     */
    public function newAction(Request $request)
    {
        $tchat = new Tchat();
        $form = $this->createForm(TchatType::class, $tchat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tchat);
            $em->flush();

            return $this->redirectToRoute('tchat_show', array('id' => $tchat->getId()));
        }

        return $this->render('AdminAdminBundle:Tchat:new.html.twig', array(
            'tchat' => $tchat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tchat entity.
     *
     */
    public function showAction(Tchat $tchat)
    {
        $deleteForm = $this->createDeleteForm($tchat);

        return $this->render('AdminAdminBundle:Tchat:show.html.twig', array(
            'tchat' => $tchat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tchat entity.
     *
     */
    public function editAction(Request $request, Tchat $tchat)
    {
        $deleteForm = $this->createDeleteForm($tchat);
        $editForm = $this->createForm(TchatType::class, $tchat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tchat);
            $em->flush();

            return $this->redirectToRoute('tchat_edit', array('id' => $tchat->getId()));
        }

        return $this->render('AdminAdminBundle:Tchat:edit.html.twig', array(
            'tchat' => $tchat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tchat entity.
     *
     */
    public function deleteAction(Request $request, Tchat $tchat)
    {
        $form = $this->createDeleteForm($tchat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tchat);
            $em->flush();
        }

        return $this->redirectToRoute('tchat_index');
    }

    /**
     * Creates a form to delete a Tchat entity.
     *
     * @param Tchat $tchat The Tchat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tchat $tchat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tchat_delete', array('id' => $tchat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
