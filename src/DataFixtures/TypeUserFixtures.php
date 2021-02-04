<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Dance;
use App\Entity\TypeUser;

class TypeUserFixtures extends Fixture
{
    const TYPEUSERS = [
        'visiteur',
        'contributeur',
        'admin',
    ];

    public function load(ObjectManager $manager)
    {
        $dances = $manager->getRepository(Dance::class)->findAll();

        foreach (self::TYPEUSERS as $type) {
            $typeUser = new TypeUser();
            $typeUser->setTypeuser($type);
            $manager->persist($typeUser);
        }

        foreach ($dances as $dance) {
            $typeUser = new TypeUser();
            $typeUser->setTypeuser($dance->getName() . ' teacher');

            $manager->persist($typeUser);
        }

        $manager->flush();
    }
}
