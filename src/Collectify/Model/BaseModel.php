<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 11:54
 */

namespace Collectify\Model;
use \RedBeanPHP\SimpleModel as RedBean_SimpleModel;

Abstract class BaseModel extends RedBean_SimpleModel  {

    public $slug;
    public $createdAt;
    public $updateAt;

} 