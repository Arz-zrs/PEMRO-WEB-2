<?php

use App\Controllers\Pages;

$routes->get('/', [Pages::class, 'index']);
$routes->get('home', [Pages::class, 'home']);
$routes->get('profile', [Pages::class, 'profile']);

$routes->get('(:segment)', [Pages::class, 'view']);