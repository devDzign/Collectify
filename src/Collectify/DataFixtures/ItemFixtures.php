<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 12:42
 */

namespace Collectify\DataFixtures;

use Collectify\Repository\ItemRepository;

class ItemFixtures extends BaseFixtures {


    public function getType(){

        return ItemRepository::TYPE;

    }

    public  function getFixtures(){

        return array(
            array(
                'title'=> 'The Chroni',
                'author'=> 'Dr Dre',
                'editor'=> 'Death Row Red',
                'releasedAt'=> '1998',
                'gender'=> 'RAP',
                'support'=> 'CD',
            ),
            array(
                'title'=> 'Radio Benba',
                'author'=> 'Manu Chao',
                'editor'=> 'Virgin Record',
                'releasedAt'=> '2002',
                'gender'=> 'Rock',
                'support'=> 'Mp3',
            ),
            array(
                'title'=> 'Back in Black',
                'author'=> 'Ac/DC',
                'editor'=> 'ATCO',
                'releasedAt'=> '1980',
                'gender'=> 'Heavy Metal',
                'support'=> 'Cassette Audio',
            )
        );
    }
} 