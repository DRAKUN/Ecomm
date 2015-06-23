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
use Drak\EcommerceBundle\Entity\Categories;


class LoadCategoriesData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $categories1 = new Categories();
        $categories1->setNom("Legumes");
        $categories1->setImage($this->getReference('media1'));
        $manager->persist($categories1);

        $categories2 = new Categories();
        $categories2->setNom("Pomme");
        $categories2->setImage($this->getReference('media2'));
        $manager->persist($categories2);

//        $categories3 = new Categories();
//        $categories3->setAlt("PlaceHold3");
//        $categories3->setPath("http://placehold.it/200/200");
//        $manager->persist($categories3);

        $manager->flush();


        $this->addReference('categories1', $categories1);
        $this->addReference('categories2', $categories2);
//        $this->addReference('Categories3', $categories3);

    }

}