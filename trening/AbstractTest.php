<?php

namespace Trening;



abstract class AbstractTest
{
  
    protected $di;


    public function __construct(Class2 $di)
    {
        $this->di = $di;
    }

    abstract function init();


}