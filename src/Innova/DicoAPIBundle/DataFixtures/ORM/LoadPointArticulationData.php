<?php
namespace Innova\DicoAPIBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Innova\DicoAPIBundle\Entity\PointArticulation;

class LoadPointArticulationData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $anterieur = new PointArticulation();
        $anterieur->setPointArticulation('Ant&eacuterieur');

        $manager->persist($anterieur);

        $this->addReference('anterieur', $anterieur);

        $quasi_anterieur = new PointArticulation();
        $quasi_anterieur->setPointArticulation('Quasi-Ant&eacuterieur');

        $manager->persist($quasi_anterieur);

        $this->addReference('quasi_anterieur', $quasi_anterieur);

        $central = new PointArticulation();
        $central->setPointArticulation('Central');

        $manager->persist($central);

        $this->addReference('central', $central);

        $quasi_posterieur = new PointArticulation();
        $quasi_posterieur->setPointArticulation('Quasi-Post&eacuterieur');

        $manager->persist($quasi_posterieur);

        $this->addReference('quasi_posterieur', $quasi_posterieur);

        $posterieur = new PointArticulation();
        $posterieur->setPointArticulation('Post&eacuterieur');

        $manager->persist($posterieur);

        $this->addReference('posterieur', $posterieur);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2; 
    }
}
?>