<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 22/06/15
 * Time: 06:29
 */


namespace Drak\EcommerceBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Drak\EcommerceBundle\Entity\Tva;


class LoadTvaData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $tva = new Tva();
        $tva->setMultiplicate('0.18');
        $tva->setNom("TVA 18%");
        $tva->setValeur('18');
        $manager->persist($tva);

        $tva1 = new Tva();
        $tva1->setMultiplicate('0.20');
        $tva1->setNom("TVA 20%");
        $tva1->setValeur('20');
        $manager->persist($tva1);

//        $categories3 = new Categories();
//        $categories3->setAlt("PlaceHold3");
//        $categories3->setPath("http://placehold.it/200/200");
//        $manager->persist($categories3);


        $manager->flush();


        $this->addReference('tva', $tva);
        $this->addReference('tva1', $tva1);
//        $this->addReference('Categories3', $categories3);
//        $this->addReference('Categories4', $categories4);

    }

}