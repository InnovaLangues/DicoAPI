<?php
namespace Innova\DicoAPIBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Innova\DicoAPIBundle\Entity\Aperture;

class LoadApertureData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fermee = new Aperture();
        $fermee->setAperture('Ferm&eacutee');

        $manager->persist($fermee);

        $this->addReference('fermee', $fermee);

        $pre_fermee = new Aperture();
        $pre_fermee->setAperture('Pr&eacute-Ferm&eacutee');

        $manager->persist($pre_fermee);

        $this->addReference('pre_fermee', $pre_fermee);

        $mi_fermee = new Aperture();
        $mi_fermee->setAperture('Mi-Ferm&eacutee');

        $manager->persist($mi_fermee);

        $this->addReference('mi_fermee', $mi_fermee);

        $moyenne = new Aperture();
        $moyenne->setAperture('Moyenne');

        $manager->persist($moyenne);

        $this->addReference('moyenne', $moyenne);

        $mi_ouverte = new Aperture();
        $mi_ouverte->setAperture('Mi-Ouverte');

        $manager->persist($mi_ouverte);

        $this->addReference('mi_ouverte', $mi_ouverte);

        $pre_ouverte = new Aperture();
        $pre_ouverte->setAperture('Pr&eacute-Ouverte');

        $manager->persist($pre_ouverte);

        $this->addReference('pre_ouverte', $pre_ouverte);

        $ouverte = new Aperture();
        $ouverte->setAperture('Ouverte');

        $manager->persist($ouverte);

        $this->addReference('ouverte', $ouverte);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1; 
    }
}
?>