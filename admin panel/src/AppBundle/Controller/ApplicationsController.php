<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Application;
use AppBundle\Entity\Category;
use AppBundle\Form\ApplicationType;
use AppBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
class CategoriesController extends Controller
{



    public function api_listAction(Request $request,$token){
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");
        }
        $em=$this->getDoctrine()->getManager();
        $imagineCacheManager = $this->get('liip_imagine.cache.manager');
        $applications=$em->getRepository('AppBundle:Application')->findBy(array(),array("position"=>"asc"));


        $list=array();
        foreach ($applications as $key => $application) {
            $c["id"]=$application->getId();
            $c["title"]=$application->getTitle();
            $c["description"]=$application->getDescription();
            $c["packageName"]=$application->getPackageName();

            $list[]=$c;
        }
        header('Content-Type: application/json');
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent=$serializer->serialize($list, 'json');
        return new Response($jsonContent);
    }

    public function indexAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $applications=$em->getRepository('AppBundle:Application')->findBy(array(),array("position"=>"asc"));
        return $this->render('AppBundle:Applications:index.html.twig',array("applications"=>$applications));
    }

    public function addAction(Request $request)
    {
        $application= new Application();
        $form = $this->createForm(new ApplicationType(),$application);
        $em=$this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($application);
            $em->flush();
            $this->addFlash('success', 'operation has been done successfully');
            return $this->redirect($this->generateUrl('app_applications_index'));
        }
        return $this->render("AppBundle:Applications:add.html.twig",array("form"=>$form->createView()));
    }

    public function upAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $application=$em->getRepository("AppBundle:Application")->find($id);
        if ($application==null) {
            throw new NotFoundHttpException("Page not found");
        }
        return $this->redirect($this->generateUrl('app_applications_index'));
    }

    public function deleteAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();

        $application = $em->getRepository("AppBundle:Application")->find($id);
        if($application==null){
            throw new NotFoundHttpException("Page not found");
        }

        $form=$this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->add('Yes', 'submit')
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em->remove($application);
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_applications_index'));
        }
        return $this->render('AppBundle:Applications:delete.html.twig',array("form"=>$form->createView()));
    }
    public function editAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $application=$em->getRepository("AppBundle:Application")->find($id);
        if ($application==null) {
            throw new NotFoundHttpException("Page not found");
        }
        $form = $this->createForm(new CategoryType(),$application);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($application);
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_applications_index'));

        }
        return $this->render("AppBundle:Applications:edit.html.twig",array("form"=>$form->createView()));
    }



}