<?php


require_once __DIR__ . '/../vendor/autoload.php';

use Trening\Class2;

$obj = new Class2();

$obj->set('2', ['90' => 'oi']);
$obj->set('11', ['t' => 'e9']);

$obj->setVar(44);
$obj->setVar(55);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$x = $obj->get('key');

print_r($x);
