<?php 

namespace App\Controller\Main;

use App\Entity\Campaign;
use App\Form\CampaignType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserProfileController extends AbstractController{
    /**
     * @Route("/profile", name="user_profile")
     */
    public function index(){      
        $user = $this->getUser();
        $campaignlist = $this->getDoctrine()->getRepository(Campaign::class)->findBy(
            ['user' => $user],
        );
        
        return $this->render('user/user_profile.html.twig', [
            'campaignlist' => $campaignlist,
        ]);
    }


}

?>