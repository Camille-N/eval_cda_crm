<?php

namespace App\DataFixtures;

use App\Entity\SalesPerson;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SalesPersonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $salesPerson1 = new SalesPerson();
        $salesPerson1->setFirstName("François");
        $salesPerson1->setLastName("Pignon");
        $salesPerson1->setEmail("francois.pignon@dinner.con");
        $salesPerson1->setPhoneNumber("0123456789");
        $manager->persist($salesPerson1);

        $salesPerson2 = new SalesPerson();
        $salesPerson2->setFirstName("Juste");
        $salesPerson2->setLastName("Leblanc");
        $salesPerson2->setEmail("juste.leblanc@dinner.con");
        $salesPerson2->setPhoneNumber("987654312");
        $manager->persist($salesPerson2);

        $salesPerson3 = new SalesPerson();
        $salesPerson3->setFirstName("Marlène");
        $salesPerson3->setLastName("Sassoeur");
        $salesPerson3->setEmail("marlene.sassoeur@dinner.con");
        $salesPerson3->setPhoneNumber("346789654");
        $manager->persist($salesPerson3);

        $manager->flush();
    }
}
