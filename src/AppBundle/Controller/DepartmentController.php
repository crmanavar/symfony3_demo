<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Department;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DepartmentController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $dept = $this->getDoctrine()->getManager();
        $departments = $dept->getRepository('AppBundle:Department')->findAll();
        return $this->render('department/index.html.twig', array(
            'departments' => $departments,
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
        $department = new Department();
        $form = $this->createForm('AppBundle\Form\DepartmentType', $department);
        $form->handleRequest($request);
        $department->setCreated(new \DateTime("now"));
        $department->setModified(new \DateTime("now"));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($department);
            $em->flush();
            $this->addFlash('success', 'Department Added!');
            return $this->redirectToRoute('department_index');
        }

        return $this->render('department/new.html.twig', array(
            'department' => $department,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction(Department $department)
    {
        return $this->render('department/show.html.twig', array(
            'department' => $department,
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction(Request $request, Department $department)
    {
        $form = $this->createForm('AppBundle\Form\DepartmentType', $department);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Department Updated!');
            return $this->redirectToRoute('department_index');
        }
        return $this->render('department/edit.html.twig', array(
            'department' => $department,
            'edit_form' => $form->createView(),
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction(Request $request, Department $department)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($department);
        $em->flush();
        $this->addFlash('success', 'Department Deleted!');
        return $this->redirectToRoute('department_index');
    }

}
