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

     $services = require __DIR__ . '/Config/Service.php';

    foreach ($services as $service){

        $provider = new $service($di);
        $provider->init();

    }

    $cms = new Cms($di); //Автоматически вызвался конструктор с параметрами $di


    
    $cms->run(); //Функция вернула значение


}catch(\ErrorException $e) {

    echo $e->getMessage();
}