<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 17:56
 */

namespace Collectify\Repository;


class CategoryRepository  extends BaseRepository {

    const TYPE = 'category';

    public function getType(){
        return self::TYPE;
    }

} 