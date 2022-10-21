<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0;$i<40;$i++) {
            $book = new Book();
            $book
                ->setTitle('The Hitchhiker\'s Guide to the Galaxy')
                ->setAuthor('Douglas Adams');
            $manager->persist($book);
        }
        $manager->flush();
    }
}
