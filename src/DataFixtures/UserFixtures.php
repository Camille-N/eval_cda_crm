<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {

        $user1 = new User();
        $user1->setEmail("user1@gmail.com");
        $user1->setPassword($this->passwordHasher->hashPassword(
            $user1,
            'user1'
        ));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail("user2@gmail.com");
        $user2->setPassword($this->passwordHasher->hashPassword(
            $user2,
            'user2'
        ));
        $manager->persist($user2);

        $manager->flush();
    }
}
