<?php

namespace App\DataFixtures;


use App\Entity\User; 
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;

class AppFixtures extends Fixture
{
    private UserPasswordHasher $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $users=[];
        $admin =new User();
        $admin 
                ->setEmail('mukolat@gmail.com')
                ->setRoles(['ROLE_ADMIN'])
                ->setPassword($this->hasher->hashPassword($admin,'demo'));


    $users[]=$admin;
        $manager->persist($admin);
        $manager->flush();
    }
}
