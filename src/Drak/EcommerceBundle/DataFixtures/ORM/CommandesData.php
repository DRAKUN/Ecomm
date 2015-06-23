<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 23/06/15
 */

namespace Drak\EcommerceBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Drak\EcommerceBundle\Entity\Commandes;


class LoadCommandesData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 7; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $commande = new Commandes();
        $commande->setUtilisateur($this->getReference('user1'));
        $commande->setDatecomm(new \DateTime());
        $commande->setReference('1');
        $commande->setValider('1');
        $commande->setProduits(array('0' => array('1'=>'2'),
                                    '1' => array('2'=>'10')

        ));
        $manager->persist($commande);

        $commande1 = new Commandes();
        $commande1->setUtilisateur($this->getReference('user'));
        $commande1->setDatecomm(new \DateTime());
        $commande1->setReference('1');
        $commande1->setValider('1');
        $commande1->setProduits(array('0' => array('1'=>'2'),
            '1' => array('2'=>'10')

        ));
        $manager->persist($commande1);



        $manager->flush();

    }

}