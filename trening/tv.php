<?php


require_once __DIR__ . '/../vendor/autoload.php';

use Trening\Class2;

$obj = new Class2();

$obj->set('2', ['90' => 'oi']);
$obj->set('55', ['r' => '1']);
$obj->set('88', ['2' => '3']);
$obj->set('99', ['r' => '8t']);
$obj->set('11', ['t' => 'e9']);

$obj->setVar(44);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$x = $obj->get('11');

$y = $obj->getVar();

print_r($y);