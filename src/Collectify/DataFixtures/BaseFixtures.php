<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 14/06/2015
 * Time: 17:38
 */

namespace Collectify\DataFixtures;


abstract class BaseFixtures
{

    public function loadFixtures()
    {
        $type = $this->getType();
        $fixtures = $this->getFixtures();

        foreach ($fixtures as $fixture) {
            $repositoryClass = sprintf('\\Collectify\\Repository\\%sRepository', ucfirst($type));
            $repository = new $repositoryClass();
            $repository->create($fixture);
        }
    }

} 