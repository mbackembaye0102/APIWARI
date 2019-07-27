<?php

namespace App\Controller;

use App\Entity\Partenaire;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/api")
 */
class WariController extends AbstractController
{
    /**
     * @Route("/register", name="register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)
    {
        $values = json_decode($request->getContent());
        if(isset($values->username,$values->password)) {
            $user = new Utilisateur();
            $user->setUsername($values->username);
            $user->setPassword($passwordEncoder->encodePassword($user, $values->password));
            $user->setRoles(['ROLE_USER']);
            $user->setPrenom($values->prenom);
            $user->setNom($values->nom);
            $user->setTelephone($values->telephone);
            $user->setMail($values->mail);
            $user->setAdresse($values->adresse);
            $user->setCni($values->cni);
            
            $repo=$this->getDoctrine()->getRepository(Partenaire::class);
            $partenaires=$repo->find($values->partenaire);
            $user->setPartenaire($partenaires);




            $entityManager->persist($user);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'L\'utilisateur a été créé'
            ];

            return new JsonResponse($data, 201);
        }
        $data = [
            'status' => 500,
            'message' => 'Vous devez renseigner les clés username et password'
        ];
        return new JsonResponse($data, 500);
    }
/** 
    * @Route(name="/login", path="/api/login_check" )
    * @return JsonResponse
    */
   public function login() : JsonResponse
   {
       $user = $this->getUser();
       return $this->json(array(
        'username' => $user->getUsername(),
        'roles' => $user->getRoles()
       )
           
       );
   }



}