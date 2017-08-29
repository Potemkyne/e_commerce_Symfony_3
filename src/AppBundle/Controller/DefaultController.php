<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    /**
     * @Route("/showAllPoster", name="showAllPoster")
     */
    public function showAllPosterAction(Request $request) {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Poster');
        $listPoster = $repository->findAll();
        return $this->render("AppBundle:Default:showAllPoster.html.twig", array('listPoster'=> $listPoster ));
    }
    
    /**
     * @Route("/findAllDirectorAjax", name="findAllDirectorAjax")
     */
     public function findAllDirectorAjaxAction(Request $request) {
          if ($request->isXmlHttpRequest()) {
            $conn = $this->get('database_connection');
            $query = "SELECT DISTINCT director FROM movie";
            $listDirector = $conn->fetchAll($query);
            return new JsonResponse(array('data' => json_encode($listDirector)));
        }
      return $this->render("::base.html.twig");
    } 
    
    /**
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request) {
        $query = $request->query->get('requete');
        $listPoster = $this->getDoctrine()->getManager()->getRepository('AppBundle:Poster')->getPosterWithMovie($query);
        return $this->render("AppBundle:Default:searchResult.html.twig", array('listPoster' => $listPoster));
    }

    /**
     * @Route("/fichePoster", name="fichePoster")
     */
    public function fichePosterAction(Request $request) {
        $id = $request->query->get('id');
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Poster');
        $poster = $repository->find($id);
        return $this->render('AppBundle:Default:fichePoster.html.twig', array('poster' => $poster));
    }

    /**
     * @Route("/card", name="card")
     */
    public function cardAction(Request $request) {
        return $this->render('AppBundle:Default:card.html.twig');
    }
}
