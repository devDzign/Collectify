<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 17:55
 */

namespace Collectify\Repository;


class ItemRepository extends BaseRepository
{
    const TYPE = 'item';

    public function getType(){
        return self::TYPE;
    }

} 