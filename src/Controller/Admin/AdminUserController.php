<?php 

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminUserController extends AbstractController{

    /**
     * @Route("/admin/user", name="admin_user")
     * 
     * @return Response
     */

    public function index(){
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('admin/user/index.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/admin/user/create", name="admin_user_create")
     * @param Request $request;
     * @param UserPasswordEncoderInterface $passwordEncoder;
     * @return RedirectResponse/Responce;
     */
    public function create(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setRoles(['ROLE_ADMIN']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('admin_user');
        }

        return $this->render('admin/user/create-form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

?>