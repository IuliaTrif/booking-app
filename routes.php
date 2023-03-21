<?php

$router->get('/', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/log-in', 'controllers/log-in.php');
//$router->post('/account' ,'/controllers/my-account.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/create.php');

//return [
//    '/' => 'controllers/home.php',
//    '/about' => 'controllers/about.php',
//    '/contact' => 'controllers/contact.php',
//    '/log-in' => 'controllers/log-in.php',
//    '/accounts/create' => 'controllers/account-create.php'
//];