<?php 

namespace App\Controller\Main;

use App\Entity\User;
use App\Entity\Campaign;
use App\Entity\Comment;
use App\Form\CampaignType;
use App\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CampaignController extends AbstractController{
    /**
     * @Route("/create/campaign", name="create_campaign")
     */
    public function createCampaign(Request $request){
        $user = $this->getUser();
        $campaign = new Campaign();
        $form = $this->createForm(CampaignType::class, $campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $campaign->setUser($user);
            $em = $this->getDoctrine()->getManager();            
            $em->persist($campaign);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_profile');
        }

        return $this->render('user/create_campaign.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/campaign/{id}", name="edit_campaign")
     */
    public function editCampaign(Request $request, $id){
        $campaign = $this->getDoctrine()->getRepository(Campaign::class)->find($id);
        $campaign->setName($campaign->getName());
        $campaign->setShortDescription($campaign->getShortDescription());
        $campaign->setDescription($campaign->getDescription());
        $form = $this->createForm(CampaignType::class, $campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();            
            $em->persist($campaign);
            $em->flush();
            return $this->redirectToRoute('user_profile');
        }

        return $this->render('user/edit_campaign.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/campaign/{id}", name="delete_campaign")
     */
    public function deleteCampaign($id){
        $em = $this->getDoctrine()->getManager();
        $campaignRepository = $em->getRepository(Campaign::class)->find($id);
        $em->remove($campaignRepository);
        $em->flush();

        $user = $this->getUser();
        $campaignlist = $this->getDoctrine()->getRepository(Campaign::class)->findBy(
            ['user' => $user],
        );
        return $this->render('user/user_profile.html.twig', [
            'campaignlist' => $campaignlist,
        ]);
    }

    /**
     * @Route("/show/campaign/{id}", name="show_campaign")
     */
    public function showCompaing(Request $request, $id){
        $user = $this->getUser();
        $campaign = $this->getDoctrine()->getRepository(Campaign::class)->find($id);
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCampaign($campaign);
            $comment->setUser($user);
            $em = $this->getDoctrine()->getManager();            
            $em->persist($comment);
            $em->persist($campaign);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('home');
        }
        $commentlist = $this->getDoctrine()->getRepository(Comment::class)->findBy(
            ['campaign' => $campaign]
        );
        return $this->render('main/show_campaign.html.twig', [
            'campaign' => $campaign,
            'form' => $form->createView(),
            'commentlist' => $commentlist,
            'user' => $user
        ]);
    }

}

?>