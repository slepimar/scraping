<?php 

// app/config/routing.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('lucky_number', new Route('/lucky/number/{count}', array(
    '_controller' => 'AppBundle:Lucky:number',
)));

return $collection;