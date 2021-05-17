<?php 

namespace App\Controller\Main;

use App\Entity\User;
use App\Entity\Campaign;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class HomeController extends AbstractController{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, PaginatorInterface $paginator){
        $campaignlist = $this->getDoctrine()->getRepository(Campaign::class)->findAll();
        $pagination = $paginator->paginate(
            $campaignlist,
            $request->query->getInt('page', 1),
            2
        );
        return $this->render('main/index.html.twig', [
            'campaignlist' => $pagination,
        ]);
    }

}

?>