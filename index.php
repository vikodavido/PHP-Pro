<?php

require_once 'Classes/User.php';

use Classes\User;

try {
    $user = new User();
    $user->setName('Viko');
    $user->setAge(30);

    print_r($user->getAll());
} catch (Exception $e) {
    echo $e->getMessage();
}
