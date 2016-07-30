<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('index', new Route('/users', array(
    '_controller' => 'AppBundle:Users:index',
)));

$collection->add('show', new Route('/users/{slug}', array(
    '_controller' => 'AppBundle:Users:show',
)));

return $collection;