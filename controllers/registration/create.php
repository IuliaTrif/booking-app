<?php

$config = require 'config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['password'] === $_POST['password_confirmation']) {
        $db->query('INSERT INTO service_auto.users(first_name, last_name, email, password, password_confirmation) 
                        VALUES(:first_name, :last_name, :email, :password, :password_confirmation)', [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'password_confirmation' => password_hash($_POST['password_confirmation'], PASSWORD_DEFAULT)
        ]);
    } else {
        throw new Exception('The passwords are not the same. Please try again!');
    }
}

require 'views/registration/create.view.php';