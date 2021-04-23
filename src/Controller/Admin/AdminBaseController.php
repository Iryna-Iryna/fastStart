<?php 

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBaseController extends AbstractController{

    public function renderDefault(){
    /**
     * @Route("", name="")
     */
        return [
            'title' => "Default for admin",
        ];
    }

}

?>