<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 00:40
 */

require_once __DIR__."/../core/bootstrap.php";

use RedBeanPHP\Facade as R;

/**
 * @var $item \Collectify\Model\Item
 */
$item = R::dispense('item');
$item->title ="mon titre";

/**
 * perssiter en BD
 */

R::store($item);
