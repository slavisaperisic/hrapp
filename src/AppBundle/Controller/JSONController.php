<?php

namespace AppBundle\Controller;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Job;
use Doctrine\Common\Util\Debug;

class JSONController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/insert_job", name="insert_job")
     */
    public function insertJobAction(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        $jobJSON = $request->getContent();

        $loggedInUser = $this->getUser();

        $jobClassObject = $serializer->deserialize($jobJSON, "AppBundle\Entity\Job", "json");

        $jobClassObject->setUser($loggedInUser);
        $loggedInUser->addJob($jobClassObject);

        $em = $this->getDoctrine()->getManager();

        $currentNumberOfJobs = $em->getRepository('AppBundle:Job')->findNumberByUser($loggedInUser->getId());

        if((int)$currentNumberOfJobs == 3) {
            mail("slavishaofficial@gmail.com", "pozdrav", "testiramo");
        }
        mail("slavishaofficial@gmail.com", "pozdrav", "testiramo");

        $em->persist($jobClassObject);
        $em->flush();

        // replace this example code with whatever you need
        return Response::create(200);
    }

    /**
     * @Route("/list_jobs", name="list_jobs_json")
     */
    public function listJobAction(Request $request)
    {
        $jobList = $this->getDoctrine()->getRepository("AppBundle:Job")->findAll();

        $serializer = SerializerBuilder::create()->build();

        $jobJSON = $serializer->serialize($jobList, "json");

        // replace this example code with whatever you need
        $response = new Response($jobJSON);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/listusersby", name="listusersby")
     */
    public function listJobByTitleAction(Request $request) {

        $em = $this->getDoctrine()->getEntityManager();

        $objectarray = $em->getRepository('AppBundle:Job')->findNumberByUser(2);

        $serializer = SerializerBuilder::create()->build();

        $userWithJobsJSON = $serializer->serialize($objectarray, "json");

        $response = new Response($userWithJobsJSON);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/listby", name="listby")
     */
    public function listAllByUserAction(Request $request) {

        $loggedInUser = $this->getUser();

        $em = $this->getDoctrine()->getEntityManager();

        $jobsOrderedByTitle = $em->getRepository('AppBundle:Job')->findAllByUser($loggedInUser);

        Debug::dump($jobsOrderedByTitle);

    }

    /**
     * @Route("/list_raw", name="list_raw")
     */
    public function listrawAction(Request $request)
    {
        $loggedInUser = $this->getUser();
        $jobs = $loggedInUser->getJobs();


    }


}
