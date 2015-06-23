<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 22/06/15
 * Time: 05:51
 */


namespace Drak\EcommerceBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Drak\EcommerceBundle\Entity\Media;


class LoadMediaData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $media1 = new Media();
        $media1->setAlt("PlaceHold1");
        $media1->setPath("http://placehold.it/200/200");
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setAlt("PlaceHold2");
        $media2->setPath("http://placehold.it/200/200");
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setAlt("PlaceHold3");
        $media3->setPath("http://placehold.it/200/200");
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setAlt("PlaceHold4");
        $media4->setPath("http://placehold.it/200/200");
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setAlt("PlaceHold5");
        $media5->setPath("http://placehold.it/200/200");
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setAlt("PlaceHold6");
        $media6->setPath("http://placehold.it/200/200");
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setAlt("PlaceHold7");
        $media7->setPath("http://placehold.it/200/200");
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setAlt("PlaceHold8");
        $media8->setPath("http://placehold.it/200/200");
        $manager->persist($media8);

        $manager->flush();


        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);


    }



}