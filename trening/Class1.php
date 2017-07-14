<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 13.07.2017
 * Time: 17:20
 */

namespace Trening;


class Class1 extends AbstractTest
{


    function init()
    {
        $this->di->set('key', ['Проверка' => 'Проверка1']);
    }
}

