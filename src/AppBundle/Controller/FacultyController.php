<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Faculty;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class FacultyController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $fac = $this->getDoctrine()->getManager();
        $faculties = $fac->getRepository('AppBundle:Faculty')->findAll();
        return $this->render('faculty/index.html.twig', array(
            'faculties' => $faculties,
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
        $faculty = new Faculty();
        $form = $this->createForm('AppBundle\Form\FacultyType', $faculty);
        $form->handleRequest($request);
        $faculty->setCreated(new \DateTime("now"));
        $faculty->setModified(new \DateTime("now"));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($faculty);
            $em->flush();
            $this->addFlash('success', 'Faculty Added!');
            return $this->redirectToRoute('faculty_index');
        }

        return $this->render('faculty/new.html.twig', array(
            'faculty' => $faculty,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction(Faculty $faculty)
    {
        return $this->render('faculty/show.html.twig', array(
            'faculty' => $faculty,
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction(Request $request, Faculty $faculty)
    {
        $form = $this->createForm('AppBundle\Form\FacultyType', $faculty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Faculty Updated!');
            return $this->redirectToRoute('faculty_index');
        }
        return $this->render('faculty/edit.html.twig', array(
            'faculty' => $faculty,
            'edit_form' => $form->createView(),
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction(Request $request, Faculty $faculty)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($faculty);
        $em->flush();
        $this->addFlash('success', 'Faculty Deleted!');
        return $this->redirectToRoute('faculty_index');
    }


}
