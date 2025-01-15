<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository; 
final class UserController extends AbstractController{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/profile/users', name: 'admin_users')]

   public function GetUsers(UserRepository $userRepository){
$listUsers = $userRepository->findAll();

dump($listUsers);
return $this->render('user/index.html.twig', [
    'controller_name' => 'UserController',
]);
}

}
