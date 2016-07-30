<?php
/**
 * Created by PhpStorm.
 * User: borja
 * Date: 18/07/16
 * Time: 22:08
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{

    /**
     * @Route("/posts", name="usersIndex")
     */
    public function indexAction(Request $request)
    {
        return new Response("List of posts");
    }
}