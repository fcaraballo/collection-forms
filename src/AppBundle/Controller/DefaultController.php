<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use AppBundle\Form\Type\AuthorType;
use AppBundle\Form\Type\SubmissionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @param int     $submissionId
     *
     * The root submissionId will be 1 (hardcoded)
     * @Route("submissions/{submissionId}/co-authors/new", name="new_coauthor")
     *
     * @return Response
     */
    public function newAction(Request $request, $submissionId)
    {
        // This submission would come from the repository
        $submission = $this->getFakeSubmission();
        $coAuthor   = new Author();

        $form = $this->createForm(AuthorType::class, $coAuthor);

        // This code will check if the form submits the data correctly
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($form->getData());
            die;
        }
//        This would be used to persist the object
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            $submission->addCoauthor($this->getData());
//
//            // We would need just the flush because of persist on cascade
//            // Same with co-authors with affiliations
//            $this->get('veruscript.submission.manager')->flush();
//
//            //This root does not exist
//            return $this->redirectToRoute('veruscript_submission_index');
//        }

        return $this->render('default/index.html.twig', [
            'form'       => $form->createView(),
            'submission' => $submission,
        ]);
    }

    /**
     * This method is to get fake data, the submission would come from the Repository
     */
    private function getFakeSubmission()
    {
        $submissionFactory = $this->get('veruscript.submission.factory');
        $authorFactory     = $this->get('veruscript.author.factory');

        $author = $authorFactory->createWithFakeData();

        $submission = $submissionFactory->createWithAuthor($author);

        return $submission;
    }
}
