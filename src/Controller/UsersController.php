<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = new Users();
        $user->setSurname("Ballgobin");
        $user->setName("Arvind");
        $user->setRegistrationType("MANUAL");
        $user->setAge(28);
        $user->setAddress1("Le Grand Branch Road");
        $user->setTownVillage("Grand Bois");
        $user->setEmailAddress("balgo_arvind@hotmail.com");
        $user->setPassword("xxgsc7gqq");
        $user->setType("SUPERADMIN");
        $user->setHomePhone("6175942");
        $user->setNationality("MAURITIANS");

        $entityManager->persist($user);
        $entityManager->flush();
        return ('Saved new product with id '.$user->getId());
    }
}
