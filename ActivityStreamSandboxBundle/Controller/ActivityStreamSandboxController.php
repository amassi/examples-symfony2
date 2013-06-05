<?php

namespace GH\ActivityStreamSandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * using "ass" for route name abreviation
 */
class ActivityStreamSandboxController extends Controller
{   
    /**
     * @Route("/", name="ass_homepage")
     */
    public function indexAction()
    {
        return $this->container->get('templating')->renderResponse(
            'GHActivityStreamSandboxBundle:ActivityStreamSandbox:index.html.twig'
        );
    } 
}
