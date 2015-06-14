<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 18:09
 */

namespace Collectify\Repository;

use RedBeanPHP\Facade as R;

abstract class BaseRepository {

    abstract function getType();

    public function create($data)
    {
        $object = R::dispense($this->getType());

        foreach ($data as $property => $value) {
            $object->$property = $value;
        }

        R::store($object);
    }

} 