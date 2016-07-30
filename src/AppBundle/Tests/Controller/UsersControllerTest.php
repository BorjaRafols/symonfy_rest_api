<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsersControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/users');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/users/{slug}');
    }

}
