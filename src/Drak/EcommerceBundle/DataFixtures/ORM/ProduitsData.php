<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 22/06/15
 * Time: 20:55
 */


namespace Drak\EcommerceBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Drak\EcommerceBundle\Entity\Produits;


class LoadProduitsData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $produits = new Produits();
        $produits->setNom("Poivron rouge");
        $produits->setImage($this->getReference('media8'));
        $produits->setCategorie($this->getReference('categories2'));
        $produits->setDescription("Le poivron rouge est un groupe de cultivateur");
        $produits->setDisponible('1');
        $produits->setPrix('200');
        $produits->setTva($this->getReference('tva1'));
        $manager->persist($produits);

        $produits1 = new Produits();
        $produits1->setNom("Poivron Vert");
        $produits1->setImage($this->getReference('media7'));
        $produits1->setCategorie($this->getReference('categories1'));
        $produits1->setDescription("Le poivron vert est un groupe de cultivateur");
        $produits1->setDisponible('1');
        $produits1->setPrix('200');
        $produits1->setTva($this->getReference('tva1'));
        $manager->persist($produits1);

        $produits2 = new Produits();
        $produits2->setNom("Poivron");
        $produits2->setImage($this->getReference('media6'));
        $produits2->setCategorie($this->getReference('categories2'));
        $produits2->setDescription("Le poivron est un bien cultiver en groupe de cultivateur");
        $produits2->setDisponible('0');
        $produits2->setPrix('200');
        $produits2->setTva($this->getReference('tva1'));
        $manager->persist($produits2);

        $produits3 = new Produits();
        $produits3->setNom("Oignon");
        $produits3->setImage($this->getReference('media5'));
        $produits3->setCategorie($this->getReference('categories2'));
        $produits3->setDescription("Lorem ipsum  rouge est un groupe de cultivateur");
        $produits3->setDisponible('1');
        $produits3->setPrix('250');
        $produits3->setTva($this->getReference('tva'));
        $manager->persist($produits3);

        $produits4 = new Produits();
        $produits4->setNom("Tomatte rouge");
        $produits4->setImage($this->getReference('media4'));
        $produits4->setCategorie($this->getReference('categories1'));
        $produits4->setDescription("La Tomate est tres bonne poivron rouge est un groupe de cultivateur");
        $produits4->setDisponible('0');
        $produits4->setPrix('200');
        $produits4->setTva($this->getReference('tva1'));
        $manager->persist($produits4);

        $produits5 = new Produits();
        $produits5->setNom("Pamplemousse");
        $produits5->setImage($this->getReference('media3'));
        $produits5->setCategorie($this->getReference('categories1'));
        $produits5->setDescription("Le pamplemousse rouge est un groupe de cultivateur");
        $produits5->setDisponible('1');
        $produits5->setPrix('200');
        $produits5->setTva($this->getReference('tva1'));
        $manager->persist($produits5);

        $manager->flush();

        $this->addReference('produits',$produits);
        $this->addReference('produits1',$produits1);
        $this->addReference('produits2',$produits2);
        $this->addReference('produits3',$produits3);
        $this->addReference('produits4',$produits4);
        $this->addReference('produits5',$produits5);
    }
}

