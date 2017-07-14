<?php

namespace Engine;

class Cms
{
    /**
     * @var Di
     */
    private $di;

    private $router;

    /**
     * Cms constructor
     * @param $di
     */
    public function __construct($di){  //Конструктор параметр можно передать сразу в экземпляр на создавая доп. функцию

        $this->di = $di;
        $this->router = $this->di->get('router');

    }

    /**
     *  Run Cms
     */
    public function run(){
          //$a = $this->di->get('test2');
//        $this->router->add('dsf','dsf','dsf');
        print_r($this->di);

    }

}