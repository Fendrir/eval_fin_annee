<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FilmothequeControllerTest extends WebTestCase
{
    public function testEfficherfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherFilm');
    }

    public function testRecherchefilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rechercheFilm');
    }

}
