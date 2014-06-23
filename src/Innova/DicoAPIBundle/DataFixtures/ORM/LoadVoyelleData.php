<?php
namespace Innova\DicoAPIBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Innova\DicoAPIBundle\Entity\Voyelle;

class LoadVoyelleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $voyelle1 = new Voyelle();
        $voyelle1->setPhoneme('i:');
        $voyelle1->setNumCol('1');
        $voyelle1->setMot('ch<b>ee</b>se');
        $voyelle1->setSonPhoneme(NULL);
        $voyelle1->setSonMot(NULL);
        $voyelle1->setAperture($manager->merge($this->getReference('fermee')));
        $voyelle1->setPointArticulation($manager->merge($this->getReference('anterieur')));

        $manager->persist($voyelle1);
        $this->addReference('voyelle1', $voyelle1);

        $voyelle2 = new Voyelle();
        $voyelle2->setPhoneme('&#618;');
        $voyelle2->setNumCol('1');
        $voyelle2->setMot('r<b>i</b>ch');
        $voyelle2->setSonPhoneme(NULL);
        $voyelle2->setSonMot(NULL);
        $voyelle2->setAperture($manager->merge($this->getReference('pre_fermee')));
        $voyelle2->setPointArticulation($manager->merge($this->getReference('quasi_anterieur')));

        $manager->persist($voyelle2);
        $this->addReference('voyelle2', $voyelle2);

        $voyelle3 = new Voyelle();
        $voyelle3->setPhoneme('e');
        $voyelle3->setNumCol('1');
        $voyelle3->setMot('b<b>e</b>d');
        $voyelle3->setSonPhoneme(NULL);
        $voyelle3->setSonMot(NULL);
        $voyelle3->setAperture($manager->merge($this->getReference('mi_fermee')));
        $voyelle3->setPointArticulation($manager->merge($this->getReference('anterieur')));

        $manager->persist($voyelle3);
        $this->addReference('voyelle3', $voyelle3);

        $voyelle4 = new Voyelle();
        $voyelle4->setPhoneme('&aelig;');
        $voyelle4->setNumCol('1');
        $voyelle4->setMot('c<b>a</b>t');
        $voyelle4->setSonPhoneme(NULL);
        $voyelle4->setSonMot(NULL);
        $voyelle4->setAperture($manager->merge($this->getReference('mi_fermee')));
        $voyelle4->setPointArticulation($manager->merge($this->getReference('anterieur')));

        $manager->persist($voyelle4);
        $this->addReference('voyelle4', $voyelle4);

        $voyelle5 = new Voyelle();
        $voyelle5->setPhoneme('&#601;');
        $voyelle5->setNumCol('2');
        $voyelle5->setMot('b<b>ir</b>d');
        $voyelle5->setSonPhoneme(NULL);
        $voyelle5->setSonMot(NULL);
        $voyelle5->setAperture($manager->merge($this->getReference('moyenne')));
        $voyelle5->setPointArticulation($manager->merge($this->getReference('central')));

        $manager->persist($voyelle5);
        $this->addReference('voyelle5', $voyelle5);

        $voyelle6 = new Voyelle();
        $voyelle6->setPhoneme('&#604;:');
        $voyelle6->setNumCol('2');
        $voyelle6->setMot('dinn<b>er</b>');
        $voyelle6->setSonPhoneme(NULL);
        $voyelle6->setSonMot(NULL);
        $voyelle6->setAperture($manager->merge($this->getReference('mi_ouverte')));
        $voyelle6->setPointArticulation($manager->merge($this->getReference('central')));

        $manager->persist($voyelle6);
        $this->addReference('voyelle6', $voyelle6);

        $voyelle7 = new Voyelle();
        $voyelle7->setPhoneme('&#652;');
        $voyelle7->setNumCol('2');
        $voyelle7->setMot('h<b>u</b>t');
        $voyelle7->setSonPhoneme(NULL);
        $voyelle7->setSonMot(NULL);
        $voyelle7->setAperture($manager->merge($this->getReference('mi_ouverte')));
        $voyelle7->setPointArticulation($manager->merge($this->getReference('posterieur')));

        $manager->persist($voyelle7);
        $this->addReference('voyelle7', $voyelle7);

        $voyelle8 = new Voyelle();
        $voyelle8->setPhoneme('u:');
        $voyelle8->setNumCol('3');
        $voyelle8->setMot('b<b>oo</b>t');
        $voyelle8->setSonPhoneme(NULL);
        $voyelle8->setSonMot(NULL);
        $voyelle8->setAperture($manager->merge($this->getReference('fermee')));
        $voyelle8->setPointArticulation($manager->merge($this->getReference('posterieur')));

        $manager->persist($voyelle8);
        $this->addReference('voyelle8', $voyelle8);

        $voyelle9 = new Voyelle();
        $voyelle9->setPhoneme('&#650;');
        $voyelle9->setNumCol('3');
        $voyelle9->setMot('b<b>oo</b>k');
        $voyelle9->setSonPhoneme(NULL);
        $voyelle9->setSonMot(NULL);
        $voyelle9->setAperture($manager->merge($this->getReference('pre_fermee')));
        $voyelle9->setPointArticulation($manager->merge($this->getReference('quasi_posterieur')));

        $manager->persist($voyelle9);
        $this->addReference('voyelle9', $voyelle9);

        $voyelle10 = new Voyelle();
        $voyelle10->setPhoneme('&#596;:');
        $voyelle10->setNumCol('3');
        $voyelle10->setMot('sw<b>or</b>d');
        $voyelle10->setSonPhoneme(NULL);
        $voyelle10->setSonMot(NULL);
        $voyelle10->setAperture($manager->merge($this->getReference('mi_ouverte')));
        $voyelle10->setPointArticulation($manager->merge($this->getReference('posterieur')));

        $manager->persist($voyelle10);
        $this->addReference('voyelle10', $voyelle10);

        $voyelle11 = new Voyelle();
        $voyelle11->setPhoneme('&#594;');
        $voyelle11->setNumCol('3');
        $voyelle11->setMot('l<b>o</b>ck');
        $voyelle11->setSonPhoneme(NULL);
        $voyelle11->setSonMot(NULL);
        $voyelle11->setAperture($manager->merge($this->getReference('ouverte')));
        $voyelle11->setPointArticulation($manager->merge($this->getReference('posterieur')));

        $manager->persist($voyelle11);
        $this->addReference('voyelle11', $voyelle11);

        $voyelle12 = new Voyelle();
        $voyelle12->setPhoneme('&#593;:');
        $voyelle12->setNumCol('3');
        $voyelle12->setMot('c<b>ar</b>');
        $voyelle12->setSonPhoneme(NULL);
        $voyelle12->setSonMot(NULL);
        $voyelle12->setAperture($manager->merge($this->getReference('ouverte')));
        $voyelle12->setPointArticulation($manager->merge($this->getReference('posterieur')));

        $manager->persist($voyelle12);
        $this->addReference('voyelle12', $voyelle12);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3; 
    }
}
?>