<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 12:43
 */

namespace Collectify\DataFixtures;


use Collectify\Repository\UserRepository;

class UserFixtures extends BaseFixtures {


    public function getType(){
        return UserRepository::TYPE;
    }

    public  function getFixtures()
    {

        return array(
            array(
                'firstname' => 'Chabour',
                'lastname' => 'mcm',
                'username' => 'mcmdev',
                'password' => 'azerty'
            ),
            array(
                'firstname' => 'yas',
                'lastname' => 'mine',
                'username' => 'devdzign',
                'password' => 'querty'
            )
        );
    }

} 