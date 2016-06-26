<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\AdminBundle\Entity\Department;
use Admin\AdminBundle\Form\DepartmentType;

/**
 * Department controller.
 *
 */
class DepartmentController extends Controller
{
    /**
     * Lists all Department entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $departments = $em->getRepository('AdminAdminBundle:Department')->findAll();

        return $this->render('AdminAdminBundle:Department:index.html.twig', array(
            'departments' => $departments,
        ));
    }

    /**
     * Creates a new Department entity.
     *
     */
    public function newAction(Request $request)
    {
        $department = new Department();
        $form = $this->createForm(DepartmentType::class, $department);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($department);
            $em->flush();

            return $this->redirectToRoute('department_show', array('id' => $department->getId()));
        }

        return $this->render('AdminAdminBundle:Department:new.html.twig', array(
            'department' => $department,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Department entity.
     *
     */
    public function showAction(Department $department)
    {
        $deleteForm = $this->createDeleteForm($department);

        return $this->render('AdminAdminBundle:Department::show.html.twig', array(
            'department' => $department,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Department entity.
     *
     */
    public function editAction(Request $request, Department $department)
    {
        $deleteForm = $this->createDeleteForm($department);
        $editForm = $this->createForm(DepartmentType::class, $department);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($department);
            $em->flush();

            return $this->redirectToRoute('department_edit', array('id' => $department->getId()));
        }

        return $this->render('AdminAdminBundle:Department:edit.html.twig', array(
            'department' => $department,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Department entity.
     *
     */
    public function deleteAction(Request $request, Department $department)
    {
        $form = $this->createDeleteForm($department);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($department);
            $em->flush();
        }

        return $this->redirectToRoute('department_index');
    }

    /**
     * Creates a form to delete a Department entity.
     *
     * @param Department $department The Department entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Department $department)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('department_delete', array('id' => $department->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
