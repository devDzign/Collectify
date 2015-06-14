<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 12:43
 */

namespace Collectify\DataFixtures;

use Collectify\Repository\CategoryRepository;

class CategoryFixtures extends BaseFixtures {

    public function getType(){
        return CategoryRepository::TYPE;
    }

    public  function getFixtures()
    {

        return array(
            array(
                'name' => 'Audio',
            ),
            array(
                'name' => 'Movie',
            ),
            array(
                'name' => 'Livre',
            )

        );
    }
} 