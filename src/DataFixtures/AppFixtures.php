<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

       $entity = new Post();
       $entity->setTitle('titulo de prueba 1');
       $entity->setContent('contenido de prueba 1 ');
       $entity->setIdUser('uno');
       $entity->setIdCategory('uno');
       $entity->setSummary('resumen de prueba 1');
       $entity->setFCreation(new \DateTime());
       $entity->setFModification(new \DateTime());


       $manager->persist($entity);

       $entity2 = new Post();
       $entity2->setTitle('titulo de prueba 2');
       $entity2->setContent('contenido de prueba 2 ');
       $entity2->setIdUser( 'dos');
       $entity2->setIdCategory('dos');
       $entity2->setSummary('resumen de prueba 2');
       $entity2->setFCreation(new \DateTime());
       $entity2->setFModification(new \DateTime());

       $manager->persist($entity2);

        $manager->flush();
    }
}
