<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\AdminBundle\Entity\Newsletter;
use Admin\AdminBundle\Form\NewsletterType;

/**
 * Newsletter controller.
 *
 */
class NewsletterController extends Controller
{
    /**
     * Lists all Newsletter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $newsletters = $em->getRepository('AdminAdminBundle:Newsletter')->findAll();

        return $this->render('AdminAdminBundle:Newsletter:index.html.twig', array(
            'newsletters' => $newsletters,
        ));
    }

    /**
     * Creates a new Newsletter entity.
     *
     */
    public function newAction(Request $request)
    {
        $newsletter = new Newsletter();
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletter);
            $em->flush();

            return $this->redirectToRoute('newsletter_show', array('id' => $newsletter->getId()));
        }

        return $this->render('AdminAdminBundle:Newsletter:new.html.twig', array(
            'newsletter' => $newsletter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Newsletter entity.
     *
     */
    public function showAction(Newsletter $newsletter)
    {
        $deleteForm = $this->createDeleteForm($newsletter);

        return $this->render('AdminAdminBundle:Newsletter:show.html.twig', array(
            'newsletter' => $newsletter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Newsletter entity.
     *
     */
    public function editAction(Request $request, Newsletter $newsletter)
    {
        $deleteForm = $this->createDeleteForm($newsletter);
        $editForm = $this->createForm(NewsletterType::class, $newsletter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletter);
            $em->flush();

            return $this->redirectToRoute('newsletter_edit', array('id' => $newsletter->getId()));
        }

        return $this->render('AdminAdminBundle:Newsletter:edit.html.twig', array(
            'newsletter' => $newsletter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Newsletter entity.
     *
     */
    public function deleteAction(Request $request, Newsletter $newsletter)
    {
        $form = $this->createDeleteForm($newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($newsletter);
            $em->flush();
        }

        return $this->redirectToRoute('newsletter_index');
    }

    /**
     * Creates a form to delete a Newsletter entity.
     *
     * @param Newsletter $newsletter The Newsletter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Newsletter $newsletter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletter_delete', array('id' => $newsletter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
