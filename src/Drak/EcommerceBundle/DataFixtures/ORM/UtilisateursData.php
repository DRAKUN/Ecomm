<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 22/06/15
 * Time: 21:27
 */

namespace Drak\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drak\UtilisateursBundle\Entity\Utilisateurs;

class LoadUtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new Utilisateurs();
        $user->setUsername('admin');
        $user->setEmail('admin@drak.fr');
        $user->setEnabled('1');
//        $user->setSalt(md5(uniqid()));
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user)
        ;
        $user->setPassword($encoder->encodePassword('admin', $user->getSalt()));
        $manager->persist($user);

        $user1 = new Utilisateurs();
        $user1->setUsername('tech');
        $user1->setEmail('tech@drak.fr');
        $user1->setEnabled('1');
//        $user1->setSalt(md5(uniqid()));
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user1)
        ;
        $user1->setPassword($encoder->encodePassword('tech', $user1->getSalt()));
        $manager->persist($user1);

        $user2 = new Utilisateurs();
        $user2->setUsername('market');
        $user2->setEmail('market@drak.fr');
        $user2->setEnabled('1');
//        $user2->setSalt(md5(uniqid()));
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user2)
        ;
        $user2->setPassword($encoder->encodePassword('market', $user2->getSalt()));
        $manager->persist($user2);


        $manager->flush();
        $this->addReference('user',$user);
        $this->addReference('user1',$user1);
        $this->addReference('user2',$user2);



    }
}