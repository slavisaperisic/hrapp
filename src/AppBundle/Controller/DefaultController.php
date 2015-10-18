<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('@templatedir/insert-job.html.twig');
    }

    /**
     * @Route("/list-jobs", name="list_jobs")
     */
    public function listJobsAction()
    {
        // replace this example code with whatever you need
        return $this->render('@templatedir/list-jobs.html.twig');
    }

}
