<?php

function myAutoloader($className) {

    $classFile = './src/Classes/'. $className .'.php';
    
    if (file_exists($classFile)) {
        require_once($classFile);
    } else {
        echo "Class file not found for {$className} at {$classFile}\n";
    }
}

spl_autoload_register('myAutoloader');

$user = New User();
$user->setName('Viko');
$user->setAge(30);

print_r($user->getAll());

$order = New Order();
$product = New Product();