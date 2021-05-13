<?php 

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminHomeController extends AbstractController{
    /**
     * @Route("/admin", name="admin_home")
     * 
     * @return Responce
     */
    public function index(){
        return $this->render('admin/index.html.twig');
    }

}

?>