<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 22/06/15
 * Time: 05:51
 */


namespace Drak\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Drak\EcommerceBundle\Entity\Media;


class LoadMediaData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $media = new Media();
        $media->setAlt("PlaceHold");
        $media->setPath("http://placehold.it/200/200");

        $manager->persist($media);
        $manager->flush();
    }
}