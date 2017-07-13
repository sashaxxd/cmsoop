<?php
/**
 * bootstrap файл загрузчик
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;


/**
 * Конструкция для работы с исключениями в try выполняется код
 * если ошибка то попадаем в catch и выводим ошибку
 */
try{

    //code

    $di = new DI();//Создали экземпляр класса

    $di->set('test',['rt =>one']); //Задали значения (set (перевод - задавать)) в функцию set
    $di->set('test2','2');

   
    
    $cms = new Cms($di); //Автоматически вызвался конструктор с параметрами $di


    
    $cms->run(); //Функция вернула значение

    $user = new \Engine\Core\Database\Connection();

//    $user->execute("INSERT INTO `users`(`name`, `password`, `date`) VALUES ('SDF','SDFSDF','56')");

   $us = $user->query("SELECT * FROM `users`");

    print_r($us);

}catch(\ErrorException $e) {

    echo $e->getMessage();
}