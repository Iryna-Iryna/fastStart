<?php 

namespace App\Controller\Main;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController{

    public function renderDefault(){
    /**
     * @Route("", name="")
     */
        return [
            'title' => "Default",
        ];
    }

}

?>