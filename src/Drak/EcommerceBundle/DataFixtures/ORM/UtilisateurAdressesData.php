<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 23/06/15
 * Time: 06:11
 */

namespace Drak\EcommerceBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Drak\EcommerceBundle\Entity\UtilisateurAdresses;


class LoadUtilisateurAdressesData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 6; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $useradresse = new UtilisateurAdresses();
        $useradresse->setNom('Corp');
        $useradresse->setAdresse('rue dial diop');
        $useradresse->setCode('7403');
        $useradresse->setComplement('blaise diagne');
        $useradresse->setPays('senegal');
        $useradresse->setPrenom('drakie');
        $useradresse->setTelephone('000 000 000');
        $useradresse->setUtilisateur($this->getReference('user1'));
        $useradresse->setVille('dakar');
        $manager->persist($useradresse);

        $useradresse1 = new UtilisateurAdresses();
        $useradresse1->setNom('1Corp');
        $useradresse1->setAdresse('1rue dial diop');
        $useradresse1->setCode('17403');
        $useradresse1->setComplement('1blaise diagne');
        $useradresse1->setPays('1senegal');
        $useradresse1->setPrenom('1drakie');
        $useradresse1->setTelephone('1000 000 000');
        $useradresse1->setUtilisateur($this->getReference('user'));
        $useradresse1->setVille('1dakar');
        $manager->persist($useradresse);


        $manager->flush();


        $this->addReference('useradresse', $useradresse);
        $this->addReference('useradresse1', $useradresse1);
//        $this->addReference('Categories3', $categories3);
//        $this->addReference('Categories4', $categories4);

    }

}