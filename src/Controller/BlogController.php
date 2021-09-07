<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog", requirements={"_locale": "en|es|fr"}, name="blog_")
 */
class BlogController extends AbstractController{

    /**
     * @param int $post
     * @Route("/blog/{slug}", name="show")
     */
    public function show(int $post){

    }

    /**
     * @Route("/{_locale}", name="index")
     */
    public function index(): Response
    {
        return new Response(
            '<html lang="en"><body>Er moet een lijst met attributes komen.</body></html>'
        );
    }

    /**
     * @Route("/blog", name="blog_list")
     */
    public function list(Request $request){
        $routeName = $request->attributes->get("_route");
        $routeParameters = $request->attributes->get("_route_params");

        $allAttributes = $request->attributes->all();


    }
}
