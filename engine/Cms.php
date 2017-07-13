<?php

namespace Engine;

class Cms
{
    /**
     * @var Di
     */
    private $di;

    /**
     * Cms constructor
     * @param $di
     */
    public function __construct($di){  //Конструктор параметр можно передать сразу в экземпляр на создавая доп. функцию

        $this->di = $di;

    }

    /**
     *  Run Cms
     */
    public function run(){
          //$a = $this->di->get('test2');
        print_r($this->di);
    }

}