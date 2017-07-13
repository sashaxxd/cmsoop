<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 13.07.2017
 * Time: 14:12
 */

namespace Trening;


class Class2
{
    public $ob = [];
    
    private $var;
    
    public function set($key, $value){
           $this->ob[$key] = $value;
           return $this;
    }

    public function get($key){

        return $this->ob[$key];

    }
    
    public function setVar($x){
          $this->var = $x;
        return $this;
    }

    public function getVar(){
      
        return $this->var;
    }

}