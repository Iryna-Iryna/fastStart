<?php 

namespace App\Controller\Main;

use App\Entity\User;
use App\Entity\Campaign;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
    /**
     * @Route("/", name="home")
     */
    public function index(){
        $campaignlist = $this->getDoctrine()->getRepository(Campaign::class)->findAll();
        return $this->render('main/index.html.twig', [
            'campaignlist' => $campaignlist,
        ]);
    }

}

?>